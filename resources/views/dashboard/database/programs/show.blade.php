@extends('dashboard.layout.app')
@section('content')

    @include('dashboard.layout.includes.breadcrumb3')


    <div class="row">
        <div class="col-md-4">
            <div class="card-box">

                <div class="mb-3">
                    <span class="font-weight-bold d-block">Program Title:</span>
                    <p>{{ $data->program_title }}</p>
                </div>
                <!-- end item -->

                <div class="mb-3">
                    <span class="font-weight-bold d-block">Short Description :</span>
                    <p>{{ $data->short_description }}</p>
                </div>
                <!-- end item -->

                <div class="mb-3">
                    <span class="font-weight-bold d-block">Full Description :</span>
                    <p>{!! $data->full_description !!}</p>
                </div>
                <!-- end item -->

                <div class="mb-3">
                    <span class="font-weight-bold">Status :</span> {!! $data->status !!}
                </div>
                <!-- end item -->

            </div>
        </div>

        <div class="col-md-8">
            <div class="card-box">

                @if (Auth::user()->hasRole('administrator'))

                    {{-- @include('dashboard.layout.includes.form-input.search') --}}

                    <div class="mt-3 table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th width="1%">No</th>
                                <th>Picture</th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Province</th>
                                {{-- <th width="280px"></th> --}}
                            </tr>
                            @forelse($data->students as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td class="p-0" width="100px">
                                        @if (!empty($data->users->picture))
                                            <img src="{{ asset($data->users->picture) }}" alt="Profile picture"
                                                class="img img-fluid w-100">
                                        @else
                                            <img src="{{ asset('images/students/00.jpg') }}" alt="Profile picture not found"
                                                class="img w-100">
                                        @endif
                                    </td>

                                    <td>
                                        {{ $data->users->first_name . ' ' . $data->users->middle_name . ' ' . $data->users->last_name ?? '' }}
                                        <small class="text-muted d-block"><i class="fa-solid fa-envelope"></i>
                                            {{ $data->users->email ?? '' }}</small>
                                    </td>
                                    <td>{{ $data->users->phone ?? '' }}</td>
                                    <td>
                                        {{ $data->provinsi->name ?? '' }}
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">
                                        Data tidak ada
                                    </td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                    <!-- end .mt-4 -->
                    {{-- {!! $data->student->links() !!} --}}
                    <!-- end inbox-rightbar-->
                @else
                @endif

            </div>
        </div>
    </div>
    <!-- end row-->

    @include('dashboard.layout.includes.form-input.edit-button')

@stop

@push('script-header')
    <!-- Plugins css-->
    <link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('script-footer')
    <!-- Select2 js-->
    <script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js') }}"></script>
    <!-- Quill js -->
    <script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js') }}"></script>
    <!-- Init js -->
    <script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js') }}"></script>
    <!-- Init js-->
    <script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js') }}"></script>

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
            var form = $(this).closest("form");
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
        CKEDITOR.config.height = '600px';
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
        $(document).ready(function(e) {
            $('#gambar').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-gambar').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

        });

        CKEDITOR.config.height = '600px';
    </script>

    <script>
        document.getElementById("doc_google_sheets").firstElementChild.setAttribute("width", "100%");
        document.getElementById("doc_google_sheets").firstElementChild.setAttribute("height", "500px");
        // document.getElementById("doc_google_sheets").setAttribute("class", "democlass");
    </script>
@endpush
