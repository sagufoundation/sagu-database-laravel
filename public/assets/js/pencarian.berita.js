    var slug     = document.getElementById("slug");
    var kategori = null;
    if(slug != null)
    {
        var kategori = slug.dataset.value;
    }



     keyword();
    function myFunction()
        {
            keyword(noAwal = 1);
        }

    function halaman(noAwal) {
        keyword(noAwal);
    }
    function keyword(noAwal = null){
         var keyword = $('#keyword').val();

         $.post('/berita-json',
          {
             _token: $('meta[name="csrf-token"]').attr('content'),
             keyword:keyword,
             noAwal:noAwal,
             kategori:kategori
           },
           function(data){
              post_row(data);
           });
    }
        //row with ajax
    function post_row(res){

    if(res.kategori != null)
    {
        let nama_kategori = res.kategori.name;
        $('#kategori').html(nama_kategori);
    }
    let htmlView = '';
    let htmlViewHalaman = '';
    for(let i = 0; i < res.datas.length; i++){
        var datetime =  new Date(res.datas[i].created_at);
        var datetimeFormat = ('0' + datetime.getDate()).slice(-2) + '/' + ('0' + (datetime.getMonth() + 1)).slice(-2) + '/' + datetime.getFullYear();
        htmlView += `
        <div class="col-lg-12 mb-70">

            <div class="blog-item">
                <div class="blog-img">
                    <a href=""/berita/`+res.datas[i].slug+`"" title="Selengkapnya">
                        <img src="/gambar/berita/`+res.datas[i].gambar+`" alt="Gambar" class="img-fluid w-100">
                    </a>
                </div>
                <div class="blog-content">
                    <h3 class="blog-title text-capitalize"><a href="/berita/`+res.datas[i].slug+`">`+res.datas[i].judul+` </a></h3>
                    <div class="blog-meta">
                        <ul class="btm-cate">
                            <li>
                                <div class="blog-date">
                                    <i class="fa fa-calendar-check-o"></i> `+datetimeFormat+`
                                </div>
                            </li>
                            <li>
                                <div class="author">
                                    <i class="fa fa-user-o"></i> `+res.datas[i].name+`
                                </div>
                            </li>
                            <li>
                                <div class="tag-line">
                                    <i class="fa fa-book"></i>
                                    <a href="/berita/kategori/`+res.datas[i].kategori_slug+`  ">`+res.datas[i].name+` </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-desc">
                        `+res.datas[i].konten_singkat+`
                    </div>
                    <div class="blog-button">
                        <a class="blog-btn" href="/berita/` + res.datas[i].slug +`">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div> `;
        }

        var jumlahData = res.count;
        var jumlahHalaman = Math.ceil(jumlahData/res.perPage);
        htmlViewHalaman += ` <nav> <ul class="pagination pagination-lg">`;
        for(let i = 1; i <= jumlahHalaman; i++){
            if(res.page == i)
            {
                htmlViewHalaman += `
                <li class="page-item active">
                    <a onclick="halaman(`+i+`)" class="page-link" href="#paginate">`+i+`</a>
                </li>`;
            }else if(res.page == null)
            {
                if(i == 1)
                {
                    htmlViewHalaman += `
                <li class="page-item active rounded">
                    <a onclick="halaman(`+i+`)" class="page-link" href="#paginate">`+i+`</a>
                </li>`;
                }else{
                    htmlViewHalaman += `
                <li class="page-item">
                    <a onclick="halaman(`+i+`)" class="page-link" href="#paginate">`+i+`</a>
                </li>`;
                }
            }
            else{
                htmlViewHalaman += `
                <li class="page-item">
                    <a onclick="halaman(`+i+`)" class="page-link" href="#paginate">`+i+`</a>
                </li>`;
            }

        };
        htmlViewHalaman += `</ul> </nav>`;
        if(jumlahData == 0)
        {
            htmlView += `
            <div class="col-lg-12 mb-70">
                <div class="blog-item">
                    <div class="blog-content">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/gambar/ilustrasi/6-300.png" alt="gambar ilustrasi">
                            </div>
                            <div class="col-md-8 my-auto">
                                <h5 class="fw-bold mt-5 h1 text-dark"> Maaf!</h5>
                                <p><b>Berita yang Anda cari tidak ditemukan</b>. Silahkan coba lagi dengan kata kata kunci atau judul berita yang lain.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> `
        }
        $('#penomoranHalaman').html(htmlViewHalaman);
        $('#berita').html(htmlView);


    }
