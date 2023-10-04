@extends('dashboard.layout.app')
@section('content')

@include('dashboard.layout.includes.breadcrumb3')

<div class="row">
    <div class="col-md-8">
        <div class="card-box">

            <div class="mb-3">
                <span class="font-weight-bold d-block">Title:</span>
                <h1>{{ $data->title }}</h1>
            </div>
            <!-- end item -->  

            <div class="mb-3">

                <div class="row">
                    <div class="col-md-4">
                        <span class="font-weight-bold d-block">Author:</span>
                        {{ $data->author->name ?? '' }}
                    </div>
                    <div class="col-md-4">
                        <span class="font-weight-bold d-block">Category:</span>
                        {{ $data->category->name ?? '' }}
                    </div>
                </div>
            </div>
            <!-- end item -->  

            <div class="mb-3">
                <span class="font-weight-bold d-block">Summary:</span>
                {{ $data->summary ?? '' }}
            </div>
            <!-- end item -->  

            {{-- USER FEATURE --}}
            @if (Auth::user()->hasRole('users'))
            <div class="mb-3">

                <form action="{{ url('dashboard/books/loan-logs/store/' )}}" method="POST">
                    @csrf

                    <input type="hidden" name="book_id" value="{{ $data->id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-paper-plane"></i> Borrow
                    </button>
                </form>

            </div>
            <!-- end item -->  
            @endif

            {{-- ADMINISTRATOR FEATURE --}}
            @if (Auth::user()->hasRole('administrator'))
            <div class="mb-3">

                <div class="row">
                    <div class="col-md-4">
                        <span class="font-weight-bold d-block">Total:</span>
                        {{ $data->total ?? '-' }}
                    </div>
                    <div class="col-md-4">
                        <span class="font-weight-bold d-block">Number of books borrowed:</span>
                        {{ $bookloan }}
                    </div>
                    <div class="col-md-4">
                        <span class="font-weight-bold d-block">Remaining Books:</span>
                        {{ $remainingBooks }}
                    </div>
                </div>
            </div>
            <!-- end item -->  

            <div class="mb-3">
                <span class="font-weight-bold d-block bg-secondary text-light px-3 py-1">Students who borrow this Book :</span>
                <div class="table-responsive border ">
                    <table class="table table-borderles">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Contact</th>
                                <th>Deadline</th>
                                <th>Status</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data->loan as $loan)
                            <tr>

                                <td>
                                    {{ $loan->user->first_name ?? '' }}
                                    {{ $loan->user->last_name ?? '' }}
                                </td>
                                <td>
                                    {{ $loan->user->email ?? '' }}
                                    <br>
                                    {{ $loan->user->phone ?? '' }}
                                </td>

                                <td>{{ $loan->return_date ?? '-' }}</td>
                                <td>
                                    @if($loan->user->status == 'Active')
                                    <span class="text-success"><i class="fa fa-dot-circle text-success"></i> Active</span> @else
                                    <span class="text-warning"><i class="fa fa-dot-circle"></i> Pending</span>
                                    @endif
                                </td>

                                <td class="d-flex">
                                    <div class="mr-1">
                                        <a class="btn btn-primary w-100" href="{{ url('dashboard/books/loan-logs/edit',  $data->id) }}">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                        </a>
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
            <!-- end item -->  
            @endif

        </div>
    </div>
    <!-- end col-->    
    <div class="col-md-4">
        <div class="card-box">
            @if (!$data->cover)
            <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Book Cover" class="w-100">
                @else
                <img src="{{ asset($data->cover) }}" alt="Book Cover" class="w-100">
            @endif
        </div>
    </div>
    <!-- end col-->
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
