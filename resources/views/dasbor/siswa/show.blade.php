@extends('dasbor.layout.app')
@section('content')

                        @include('dasbor.layout.includes.breadcrumb3')
    
{!! Form::model($data, array( 'url'=>'dasbor/siswa/'. $data->id, 'method'=>'put','files'=>'true'))!!}
@csrf



<div class="row">
    <div class="col-lg-4 col-xl-4">
        <div class="card-box text-center">

            @if(!empty($data->picture))
            <img src="{{ asset('gambar/' . Request::segment(2) . '/' . $data->picture) }}" alt="Profile picture" class="rounded">
            @else 
            <img src="{{ asset('gambar/' . Request::segment(2) . '/00.jpg') }}" alt="Profile picture not found" class="rounded">
            @endif

            <h4 class="mb-0 mt-3">{{ $data->first_name .' '. $data->middle_name . ' '. $data->last_name ?? '' }}</h4>
            <p class="text-muted"><i class="fa-solid fa-envelope mr-1"></i> {{ $data->email_sagu }}</p>

            <a href="{{ url(Request::segment(1).'/'.Request::segment(2). '/edit/' . $data->id )}}" class="btn btn-success btn-xs waves-effect mb-2 waves-light">
                <i class="fa-solid fa-pencil-square"></i> Edit
            </a>

            <form action="{{ url(Request::segment(1).'/'.Request::segment(2), $data->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">
                    <i class="fa-solid fa-trash"></i> Trash
                </button>
            </form>

            <div class="text-left mt-3">
                <h4 class="font-13 text-uppercase">About :</h4>
                <p class="text-muted font-13 mb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolorem nam animi recusandae sequi veniam ipsum fugiat aliquam rem consequuntur!

                    <a href="#">Read more</a>
                </p>
                <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">{{ $data->first_name .' '. $data->middle_name . ' '. $data->last_name ?? '' }}</span></p>

                <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2"> {{ $data->phone }}</span></p>

                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "> {{ $data->email_sagu }}</span></p>

                <p class="text-muted mb-1 font-13"><strong>Province :</strong> <span class="ml-2"> {{ $data->province }}</span></p>
            </div>

        </div> <!-- end card-box -->

    </div> <!-- end col-->

    <div class="col-lg-8 col-xl-8">
        <div class="card-box">
            <ul class="nav nav-pills navtab-bg nav-justified">
                <li class="nav-item">
                    <a href="#education" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <i class="fa-solid fa-graduation-cap mr-1"></i> Education History
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#profile" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <i class="fa-solid fa-user mr-1"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#documents" data-toggle="tab" aria-expanded="true" class="nav-link active">
                        <i class="fa-solid fa-folder mr-1"></i> Documents
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="education">
                    
                    <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-graduation-cap mr-1"></i> Formal</h5>

                    <ul class="list-unstyled timeline-sm">
                        <li class="timeline-sm-item">
                            <span class="timeline-sm-date">2015 - 18</span>
                            <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                            <p>websitename.com</p>
                            <p class="text-muted mt-2">Everyone realizes why a new common language
                                would be desirable: one could refuse to pay expensive translators.
                                To achieve this, it would be necessary to have uniform grammar,
                                pronunciation and more common words.</p>

                        </li>
                        <li class="timeline-sm-item">
                            <span class="timeline-sm-date">2012 - 15</span>
                            <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                            <p>Software Inc.</p>
                            <p class="text-muted mt-2">If several languages coalesce, the grammar
                                of the resulting language is more simple and regular than that of
                                the individual languages. The new common language will be more
                                simple and regular than the existing European languages.</p>
                        </li>
                        <li class="timeline-sm-item">
                            <span class="timeline-sm-date">2010 - 12</span>
                            <h5 class="mt-0 mb-1">Graphic Designer</h5>
                            <p>Coderthemes LLP</p>
                            <p class="text-muted mt-2 mb-0">The European languages are members of
                                the same family. Their separate existence is a myth. For science
                                music sport etc, Europe uses the same vocabulary. The languages
                                only differ in their grammar their pronunciation.</p>
                        </li>
                    </ul>
                    
                    <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-graduation-cap mr-1"></i> Non Formal</h5>

                    <ul class="list-unstyled timeline-sm">
                        <li class="timeline-sm-item">
                            <span class="timeline-sm-date">2015 - 18</span>
                            <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                            <p>websitename.com</p>
                            <p class="text-muted mt-2">Everyone realizes why a new common language
                                would be desirable: one could refuse to pay expensive translators.
                                To achieve this, it would be necessary to have uniform grammar,
                                pronunciation and more common words.</p>

                        </li>
                        <li class="timeline-sm-item">
                            <span class="timeline-sm-date">2012 - 15</span>
                            <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                            <p>Software Inc.</p>
                            <p class="text-muted mt-2">If several languages coalesce, the grammar
                                of the resulting language is more simple and regular than that of
                                the individual languages. The new common language will be more
                                simple and regular than the existing European languages.</p>
                        </li>
                        <li class="timeline-sm-item">
                            <span class="timeline-sm-date">2010 - 12</span>
                            <h5 class="mt-0 mb-1">Graphic Designer</h5>
                            <p>Coderthemes LLP</p>
                            <p class="text-muted mt-2 mb-0">The European languages are members of
                                the same family. Their separate existence is a myth. For science
                                music sport etc, Europe uses the same vocabulary. The languages
                                only differ in their grammar their pronunciation.</p>
                        </li>
                    </ul>

                </div> <!-- end tab-pane -->
                <!-- end about me section content -->

                <div class="tab-pane" id="profile">
                    
                    <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-file mr-1"></i> Biography</h5>

                    <div class="card">
                        <div class="card-body">
                            <h3>Lorem ipsum dolor sit amet.</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, expedita accusantium. Fugiat, facilis illum quisquam ad perferendis temporibus alias amet?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quisquam eaque debitis ex iste quasi assumenda ut eos, facere consequatur ipsum beatae, veritatis ratione inventore sequi enim mollitia et sed? Aliquam fugiat sint eos expedita porro cumque repellat quisquam natus!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia animi velit ipsum voluptatibus cumque? Ipsum totam aut rerum mollitia minima illum deleniti unde vero, quas ab dolorem commodi illo cumque ducimus ipsam optio molestiae. Sunt, officiis maxime! Minima vel excepturi iste nihil quia nesciunt impedit eveniet quam? Recusandae, dolores hic.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="float-right btn btn-primary border"><i class="fa-solid fa-pencil-square" class="btn"></i> Edit</a>
                        </div>
                    </div>

                </div>
                <!-- end timeline content-->

                <div class="tab-pane show active" id="documents">
                    
                    <h5 class="mb-2 text-uppercase"><i class="fa-solid fa-folder"></i> PINNED Document</h5>
                    
                    <div class="">
                        <p>Dokumen yang sering digunakan atau sedang dalam tahap penggunaan.</p>

                        @include('dasbor.siswa.documents.create-modal')

                        <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#standard-modal">
                            <i class="fa-solid fa-plus-square"></i> Add
                        </button>
                    </div>

                    

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($documents as $document)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $document->title ?? '' }}</td>
                                    <td>{{ $document->description ?? '' }}</td>
                                    <td style="font-size: 80%">{{ $document->created_at ?? '' }}</td>
                                    <td style="font-size: 80%">{{ $document->updated_at ?? '' }}</td>
                                    <td width="200px">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="{{ $document->url ?? '' }}" target="_blank" class="btn btn-success border" data-toggle="tooltip" title='Show'><i class="fa-solid fa-file"></i></a>
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{ url(Request::segment(1).'/'.Request::segment(2).'/documents/destroy', $document->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'> 
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                @empty

                                <tr>
                                    <td colspan="6">
                                        Belum ada dokumen yang disematkan
                                    </td>
                                </tr>

                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <h5 class="my-4 text-uppercase"><i class="fa-solid fa-folder"></i> All Documents (Google Sheets)</h5>

                        <p>Semua dokumen milik siswa yang sudah terkumpul. Daftar dokumen dijelaskan pada judul, keterangan dan tipe file pada Google Sheets. Tersedia juga link untuk menampilkan secara detail atau mendownloadnya.</p>                                            
                    
                        @empty($data->doc_google_sheets)

                        <div class="alert alert-warning">
                            <b>Peringatan!</b> Link google sheets belum ada. Silahkan <a href="{{ url('dasbor/siswa/edit', $data->id) }}" class="font-weight-bold"><i class="fa-solid fa-pencil-square"></i> Edit</a> untuk melengkapinya.
                        </div>

                        @else
                        
                        <div id="doc_google_sheets">
                        {!! $data->doc_google_sheets ?? '' !!}
                        </div>

                        @endempty

                        <ul class="list-group my-2 rounded-0">
                            <li class="list-group-item bg-primary text-white fw-bold font-weight-bold">
                                Keterangan
                            </li>
                            <li class="list-group-item">
                                Dokumen tersimpan di google drive.
                            </li>
                            <li class="list-group-item">
                                Hak akses dokumen hanya diberikan kepada pengguna sistem.
                            </li>
                            <li class="list-group-item">
                                Pengguna luar selain admin SAGU Foundation tidak dapat mengubah atau menambahkan file di dalam folder google drive.
                            </li>
                        </ul> 
                    </div>
                </div>
                <!-- end settings content-->

            </div> <!-- end tab-content -->
        </div> <!-- end card-box-->

    </div> <!-- end col -->
</div>
<!-- end row-->

{!! Form::close() !!}

@stop

@push('script-header')
<!-- Plugins css-->
<link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush

@push('script-footer')
<!-- Select2 js-->
<script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
<!-- Quill js -->
<script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>
<!-- Init js -->
<script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>
<!-- Init js-->
<script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

</script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         event.preventDefault();
         swal.fire({
           title: 'Anda Yakin?',
           text: "data akan terhapus permanen!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Ya, Bersihkan!'
         })
         .then((result) => {
           if (result.isConfirmed) {
               form.submit();
               Swal.fire(
               'Deleted!',
               'Your data has been deleted.',
               'success'
               )
           }
       });
     });

</script>


<script type="text/javascript">
    CKEDITOR.replace('ckeditor', options);
    CKEDITOR.config.height='600px';
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    $(document).ready(function (e) {
               $('#gambar').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-gambar').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
               });

            });

    CKEDITOR.config.height='600px';
</script>

<script>
    document.getElementById("doc_google_sheets").firstElementChild.setAttribute("width", "100%");
    document.getElementById("doc_google_sheets").firstElementChild.setAttribute("height", "500px");
    // document.getElementById("doc_google_sheets").setAttribute("class", "democlass");
</script>

@endpush