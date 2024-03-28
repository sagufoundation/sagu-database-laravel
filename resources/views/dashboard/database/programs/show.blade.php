@extends('dashboard.layout.app')
@section('content')

    @include('dashboard.layout.includes.breadcrumb3')


    <div class="row">
        <div class="col-md-4">
            <div class="card-box">

                <div class="mb-3">
                    <span class="font-weight-bold d-block">Program Title:</span>
                    <p>{{ $program->program_title }}</p>
                </div>
                <!-- end item -->

                <div class="mb-3">
                    <span class="font-weight-bold d-block">Group</span>
                    <p>{{ $program->group->group_title ?? ''}}</p>
                </div>
                <!-- end item -->

                <div class="mb-3">
                    <span class="font-weight-bold d-block">Program Year</span>
                    <p>{{ $program->program_year }}</p>
                </div>
                <!-- end item -->

                <div class="mb-3">
                    <span class="font-weight-bold d-block">Short Description :</span>
                    <p>{{ $program->short_description }}</p>
                </div>
                <!-- end item -->

                <div class="mb-3">
                    <span class="font-weight-bold d-block">Full Description :</span>
                    <p>{!! $program->full_description !!}</p>
                </div>
                <!-- end item -->

                <div class="">
                    <span class="font-weight-bold">Total Students :</span> {{ $program->students->count() }}
                </div>
                <!-- end item -->

                <div class="">
                    <span class="font-weight-bold">Female :</span> {{ $female }}
                </div>
                <!-- end item -->

                <div class="mb-3">
                    <span class="font-weight-bold">Male :</span> {{ $male }}
                </div>
                <!-- end item -->


                <div class="mb-3">
                    <span class="font-weight-bold">Status :</span> {!! $program->status !!}
                </div>
                <!-- end item -->

            </div>
        </div>

        <div class="col-md-8">
            <div class="card-box">

                @if (Auth::user()->hasRole('administrator'))

                    <div class="mt-3 table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th width="1%">No</th>
                                <th>Picture</th>
                                <th>Full Name</th>
                                <th width="280px">Options</th>
                            </tr>
                            @forelse($datas as $data)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td class="p-0" width="100px">
                                            @if (!empty($data->picture))
                                                @if (ENV('APP_ENV') == 'local')
                                                <img src="https://dbsf.sagufoundation.org/{{ $data->picture }}" alt="Profile picture" class="img img-fluid w-100">
                                                @else
                                                <img src="{{ asset($data->picture) }}" alt="Profile picture" class="img img-fluid w-100">
                                                @endif
                                            @else
                                                <img src="{{ asset('images/students/00.jpg') }}" alt="Profile picture not found" class="img w-100">
                                            @endif
                                        </td>

                                        <td>
                                            {{ $data->first_name . ' ' . $data->middle_name . ' ' . $data->last_name ?? '' }}
                                        </td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <div class="d-block p-1">
                                                    <a href="{{ url('dashboard/students/show', $data->id) }}"
                                                        class="btn btn-success w-100">
                                                        <i class="fa-solid fa-id-badge d-block"></i> Show
                                                    </a>
                                                </div>
                                                <div class="d-block p-1">
                                                    <a class="btn btn-primary w-100"
                                                        href="{{ url('dashboard/students/edit/profile', $data->id) }}">
                                                        <i class="fa-solid fa-pen-to-square d-block"></i> Edit
                                                    </a>
                                                </div>
                                                <div class="d-block p-1">
                                                    <form
                                                        action="{{ url('dashboard/students', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger w-100">
                                                            <i class="fa-solid fa-trash d-block"></i> Trash
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
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

                @else

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
                        @forelse($datas as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td class="p-0" width="100px">
                                        @if (!empty($data->picture))
                                            @if (ENV('APP_ENV') == 'local')
                                            <img src="https://dbsf.sagufoundation.org/{{ $data->picture }}" alt="Profile picture" class="img img-fluid w-100">
                                            @else
                                            <img src="{{ asset($data->picture) }}" alt="Profile picture" class="img img-fluid w-100">
                                            @endif
                                        @else
                                            <img src="{{ asset('images/students/00.jpg') }}" alt="Profile picture not found" class="img w-100">
                                        @endif
                                    </td>

                                    <td>
                                        {{ $data->first_name . ' ' . $data->middle_name . ' ' . $data->last_name ?? '' }}
                                        <small class="text-muted d-block"><i class="fa-solid fa-envelope"></i>
                                            {{ $data->email ?? '' }}</small>
                                    </td>
                                    <td>{{ $data->phone ?? '' }}</td>
                                    <td>
                                        {{ $data->name ?? '' }}
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
