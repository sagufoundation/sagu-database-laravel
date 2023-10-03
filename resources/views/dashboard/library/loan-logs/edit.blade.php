@extends('dashboard.layout.app')
@section('content')

                        @include('dashboard.layout.includes.breadcrumb3')




<div class="row">
    <div class="col-md-4">
        <div class="card-box">
            <img src="{{ asset($data->book->cover) }}" alt="Book Cover" class="w-100">
        </div>
    </div>
    <div class="col-md-8">
        <div class="card-box">

            <div class="mb-3">
                <span class="font-weight-bold d-block">Title:</span>
                <h1>{{ $data->book->title }}</h1>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <span class="font-weight-bold d-block">Author:</span>
                        {{ $data->book->author->name ?? '' }}
                    </div>
                    <div class="col-md-6">
                        <span class="font-weight-bold d-block">Categories :</span>
                        {{ $data->book->category->name ?? '' }}
                    </div>
                </div>

            </div>

            <div class="mb-3">
                <span class="font-weight-bold d-block">Summary:</span>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos totam unde corporis ea consequatur, quibusdam vero repellendus! Nobis, voluptatibus ab ipsam quasi ex ea adipisci soluta fugit commodi dolorum atque consectetur, nisi, eum sunt facilis.</p>
            </div>

            <div class="mb-3">

                <form action="{{ url('dashboard/books/loan-logs/update', $data->id )}}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- <input type="text" name="id" value="{{ $data->id }}"> --}}
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="return_date" class="font-weight-bold d-block">Return Date:</label>
                            <input type="date" id="return_date" name="return_date" value="{{ $data->return_date }}" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label for="status" class="font-weight-bold d-block">Status :</label>
                            <select name="status" id="" class="form-control">
                                <option value="" hidden>Select</option>
                                <option value="Active" @if($data->status == 'Active') selected @endif>Active</option>
                                <option value="Pending" @if($data->status == 'Pending') selected @endif>Pending</option>
                                <option value="Returned" @if($data->status == 'Returned') selected @endif>Returned</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary d-block mt-3">
                        <i class="fa-solid fa-save"></i> Update
                    </button>
                </form>

            </div>

        </div>
    </div>
</div>
<!-- end row-->

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
