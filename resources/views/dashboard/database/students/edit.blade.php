@extends('dashboard.layout.app')
@section('content')
@include('dashboard.layout.includes.breadcrumb3')

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Left sidebar -->
                                        @include('dashboard.layout.includes.left-sidebar-edit-students')
                                        <!-- End Left sidebar -->

                                        <div class="inbox-rightbar">

                                        {!! Form::model($data, array( 'url'=>'dashboard/students/update/'. Request::segment(4) . '/' .$data->id, 'method'=>'put','files'=>'true'))!!}
                                        @csrf

                                        @if(Request::segment(4) == 'profile')
                                            @include('dashboard.database.students.edit-inputs.profile')

                                        @elseif(Request::segment(4) == 'picture')
                                            @include('dashboard.database.students.edit-inputs.picture')

                                        @elseif(Request::segment(4) == 'biography')
                                            @include('dashboard.database.students.edit-inputs.biography')

                                        @elseif (Request::segment(4) == 'contact')
                                            @include('dashboard.database.students.edit-inputs.contact')

                                        @elseif (Request::segment(4) == 'address')
                                            @include('dashboard.database.students.edit-inputs.address')

                                        @elseif (Request::segment(4) == 'documents')
                                            @include('dashboard.database.students.edit-inputs.documents')

                                            @elseif (Request::segment(4) == 'programs')
                                                @include('dashboard.database.students.edit-inputs.programs',['programs',$programs])

                                        @elseif (Request::segment(4) == 'educations')
                                            @include('dashboard.database.students.edit-inputs.educations')

                                        @elseif (Request::segment(4) == 'password')
                                            @include('dashboard.database.students.edit-inputs.password')

                                        @elseif (Request::segment(4) == 'account')
                                            @include('dashboard.database.students.edit-inputs.account')

                                        @elseif(Request::segment(4) == '')

                                        @endif

                                        {!! Form::close() !!}

                                        </div>
                                        <!-- end inbox-rightbar-->

                                        <div class="clearfix"></div>
                                        </div>

                                    </div> <!-- end card-->
                                </div> <!-- end col -->

                            </div>
                        </div>
                        <!-- .row end -->

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
        $('#picture').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-picture').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
        });

    });

    CKEDITOR.config.height='150px';
</script>

<script>
    document.getElementById("doc_google_sheets").firstElementChild.setAttribute("width", "100%");
    document.getElementById("doc_google_sheets").firstElementChild.setAttribute("height", "500px");
    // document.getElementById("doc_google_sheets").setAttribute("class", "democlass");
</script>

@endpush
