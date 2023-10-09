@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb3')




<div class="row">
    <div class="col-md-12">
        <div class="card-box">

            <div class="mb-3">
                <span class="font-weight-bold d-block">Name:</span>
                <h1>{!! $data->name !!}</h1>
            </div>
            <div class="mb-3">
                <span class="font-weight-bold d-block">Status :</span>
                <h4>{{ $data->status }}</h4>
            </div>

            <div class="mb-3">
                <span class="font-weight-bold d-block mb-3">Books owned by the author :</span>
                <div class="table-responsive border ">
                    <table class="table table-borderles">
                        <thead>
                            <tr>
                                <th>Name Book</th>
                                <th>Categories </th>
                                <th>Status</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data->books as $book)
                            <tr>

                                <td>
                                    {{ $book->title ?? '' }}
                                </td>
                                <td>
                                    {{ $book->category->name ?? '' }}
                                </td>
                                <td>{{ $book->status ?? '-' }}</td>

                                <td class="d-flex">
                                    <div class="mr-1">
                                        <a href="#" target="_blank"
                                            class="btn btn-sm btn-outline-success w-100 border" data-toggle="tooltip"
                                            title='Show'><i class="fa-solid fa-edit"></i></a>
                                    </div>

                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="3">Data tidak ada</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>


            @if (Auth::user()->hasRole('student'))
            <div class="mb-3">

                <form action="{{ url('dashboard/books/loan-logs/store/' )}}" method="POST">
                    @csrf

                    <input type="text" name="book_id" value="{{ $data->id }}">
                    <input type="text" name="user_id" value="{{ Auth::user()->id }}">

                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-paper-plane"></i> Borrow
                    </button>
                </form>

            </div>
            <!-- end item -->
            @endif
        </div>
    </div>
</div>
<!-- end row-->

@include('dashboard.layout.includes.form-input.edit-button')

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
