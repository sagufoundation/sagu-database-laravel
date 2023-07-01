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
                    <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link active">
                        <i class="fa-solid fa-user mr-1"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#documents" data-toggle="tab" aria-expanded="false" class="nav-link">
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

                <div class="tab-pane show active" id="profile">
                    
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

                <div class="tab-pane" id="documents">
                    
                    <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-folder"></i> Documents</h5>

                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Updated on</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Akta Kelahiran</td>
                                            <td>Surat Akta Kelahiran</td>
                                            <td>28/10/2020</td>
                                            @include('dasbor.siswa.includes.document-options')
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>KTP</td>
                                            <td>Kartu Tanda Penduduk</td>
                                            <td>28/10/2020</td>
                                            @include('dasbor.siswa.includes.document-options')
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Passport</td>
                                            <td>Paspor warga negara Indonesia</td>
                                            <td>28/10/2020</td>
                                            <td width="200px">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="{{ url('') }}" class="btn btn-light border">
                                                            <i class="fa-solid fa-upload"></i> Upload
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Rekening Mandiri</td>
                                            <td>Foto buku tabungan Bank Mandiri</td>
                                            <td>28/10/2020</td>
                                            @include('dasbor.siswa.includes.document-options')
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Ijazah SMK</td>
                                            <td>Ijazah Sekolah Menengah Kejuruan</td>
                                            <td>28/10/2020</td>
                                            <td width="200px">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="{{ url('') }}" class="btn btn-light border">
                                                            <i class="fa-solid fa-upload"></i> Upload
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
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

@endpush