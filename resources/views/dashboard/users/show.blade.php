@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb3')




<div class="row">
    <div class="col-12">
        <div class="card-box">

            <div class="row">
                
                <div class="col-md-4">

                    <div class="mb-3">
                        <span class="font-weight-bold d-block">Full Name:</span>
                        {{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}
                    </div>
                    <!-- item group end -->

                    <div class="mb-3">
                        <span class="font-weight-bold d-block">Phone Number:</span>
                        {{ $data->phone }}
                    </div>
                    <!-- item group end -->

                    <div class="mb-3">
                        <span class="font-weight-bold d-block">Job Title:</span>
                        {{ $data->job_title }}
                    </div>
                    <!-- item group end -->

                </div>
                <!-- .col end -->
                
                <div class="col-md-4">

                    <div class="mb-3">
                        <span class="font-weight-bold d-block">Role:</span>
                        {{ implode(",",$data->roles()->pluck('display_name')->toArray()) }}
                    </div>
                    <!-- item group end -->

                    <div class="mb-3">
                        <span class="font-weight-bold d-block">Email:</span>
                        {{ $data->email }}
                    </div>
                    <!-- item group end -->

                    <div class="mb-3">
                        <span class="font-weight-bold d-block">Password:</span>
                        <a href="{{ url('dashboard/users/edit', $data->id) }}">Edit</a>
                    </div>
                    <!-- item group end -->

                </div>
                <!-- .col end -->
                
                <div class="col-md-4">

                    <div class="mb-3">
                        @if (!$data->picture)
                        <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Book Cover" class="w-100">
                        @else
                        <img src="{{ asset($data->picture) }}" alt="Book Cover" class="w-100">
                        @endif
                    </div>
                    <!-- item group end -->

                </div>
                <!-- .col end -->

            </div>
            <!-- .row end -->
        </div>
    </div>
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <div class="">

                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2). '/edit',  $data->id) }}" class="btn btn-lg btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>
                        <!-- end item -->
            
                        <a href="{{ url(Request::segment(1).'/'.Request::segment(2)) }}" class="btn btn-lg btn-outline-primary">
                            <i class="fa-solid fa-reply"></i> Back to {{ ucfirst(Request::segment(2)) }} 
                        </a>
                        <!-- end item -->
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>

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
