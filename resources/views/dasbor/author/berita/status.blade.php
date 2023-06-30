@extends('dasbor.layout.app')
@section('content')
<!-- start page content wrapper-->
<!-- start page title -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dasbor')}}">Dasbor</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('dasbor.berita') }}"></a>Kelola Berita</li>
                                <li class="breadcrumb-item active">Ubah Status</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ubah Status Berita </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="card">
                   <div class="col-lg-6  offset-2">
                        <div class="card-body">

                            <form action="{{route('dasbor.berita.updateStatus',['id' => $data->id])}}" method="POST">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" id="status_id" class="form-control" onchange="showHide(this.value);">
                                            <option value="{{ $data->status }}" selected>{{ $data->status }}</option>
                                            <option value="publish">Publish</option>
                                            <option value="draft">Draft</option>
                                            <option value="revisi">Revisi</option>
                                        </select>
                                    </div> <!-- end mb-3 -->
                                </div> <!-- end row -->
                                <div class="mb-3" id="ket" style="display: none">
                                    <label for="category" class="form-label">Keterangan Revisi <span class="text-danger">*</span></label>
                                    <textarea name="ket" class="form-control" rows="3" placeholder="Masukan keterangan revisi">{{ old('ket',$data->ket) }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card-box">
                                            <button  type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
                                            <a href="{{ route('dasbor.berita') }}" class="btn btn-light">
                                                <i class="mdi mdi-arrow-left mr-1"></i>Kembali
                                            </a>
                                        </div>
                                    </div> <!-- end col -->
                                </div>

                            </form> <!-- end form -->
                        </div>
                   </div>
                </div>
            </div>

    </div> <!-- end card -->

</div> <!-- end col -->


</div>
        </div>
    </div>
<!-- end row -->
<!--end wrapper-->



  @stop

@push('script-header')
 <!-- Plugins css-->
 <link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- <link href="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/admin/assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush


  @push('script-footer')
   <!-- Select2 js-->
   <script src="{{ asset('assets/admin/assets/js/vendor.min.js')}}"></script>
   <script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
        <!-- Quill js -->
        <script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>
   <!-- Init js -->

     <script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>
        <!-- Dropzone file uploads-->
        <!-- <script src="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
        <script src="{{ asset('assets/admin/assets/libs/dropify/js/dropify.min.js')}}"></script>
    -->

        <!-- Init js-->
        <script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function (e) {
               $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
               });

            });


            function showHide(value) {
                if (value=='revisi')
                document.getElementById('ket').style.display = 'block';
                else
                document.getElementById('ket').style.display = 'none';
            }
        </script>

  @endpush
