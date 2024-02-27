@extends('dashboard.layout.app')
@section('content')
    @include('dashboard.layout.includes.breadcrumb3')

    {!! Form::model($data, ['url' => 'dashboard/students/' . $data->id, 'method' => 'put', 'files' => 'true']) !!}
    @csrf



    <div class="row">
        <div class="col-lg-4 col-xl-4">
            <div class="card-box text-center">
                @if (!$data->picture)
                    <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Profile picture not found"
                        class="rounded-0 w-100">
                @else
                    <img src="{{ asset($data->picture) }}" alt="Profile picture" class="rounded-0 w-100">
                @endif

                <h4 class="mb-0 mt-3">{{ $data->first_name . ' ' . $data->middle_name . ' ' . $data->last_name ?? '' }}</h4>

                @if (Auth::user()->hasRole('administrator'))
                    <a href="{{ url(Request::segment(1) . '/' . Request::segment(2) . '/edit/profile', $data->id) }}"
                        class="btn btn-success btn-xs waves-effect mb-2 waves-light">
                        <i class="fa-solid fa-pencil-square"></i> Edit
                    </a>

                    <form action="{{ url(Request::segment(1) . '/' . Request::segment(2), $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">
                            <i class="fa-solid fa-trash"></i> Trash
                        </button>
                    </form>
                @endif

                <div class="text-left mt-3">
                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong>
                        <span
                            class="d-block">{{ $data->first_name . ' ' . $data->middle_name . ' ' . $data->last_name ?? '' }}</span>
                    </p>

                    @if (!empty($data->student->genre))
                        <p class="text-muted mb-1 font-13"><strong>Genre :</strong>
                            <span class="d-block"> {{ $data->student->genre ?? '' }}</span>
                        </p>
                     @endif

                    @if (!empty($data->phone))
                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong>
                            <span class="d-block"> {{ $data->phone }}</span>
                        </p>
                    @endif

                    @if (!empty($data->student->email_google ?? ''))
                        <p class="text-muted mb-2 font-13"><strong>Email Google :</strong>
                            <span class="d-block">
                                <a href="mailto:{{ $data->student->email_google ?? '' }}"><i
                                        class="fa-solid fa-envelope mr-1"></i> {{ $data->student->email_google ?? '' }}</a>
                            </span>
                        </p>
                    @endif

                    @if (!empty($data->student->email_sagu ?? ''))
                        <p class="text-muted mb-2 font-13"><strong>Email SAGU Foundation :</strong>
                            <span class="d-block">
                                <a href="mailto:{{ $data->student->email_sagu ?? '' }}"><i
                                        class="fa-solid fa-envelope mr-1"></i> {{ $data->student->email_sagu ?? '' }}</a>
                            </span>
                        </p>
                    @endif

                    @if (!empty($data->student->email_outlook ?? ''))
                        <p class="text-muted mb-2 font-13"><strong>Email Microsoft Outlook :</strong>
                            <span class="d-block">
                                <a href="mailto:{{ $data->student->email_outlook ?? '' }}"><i
                                        class="fa-solid fa-envelope mr-1"></i>
                                    {{ $data->student->email_outlook ?? '' }}</a>
                            </span>
                        </p>
                    @endif

                    @if (!empty($data->student->email_campus ?? ''))
                        <p class="text-muted mb-2 font-13"><strong>Email Campus :</strong>
                            <span class="d-block">
                                <a href="mailto:{{ $data->student->email_campus ?? '' }}"><i
                                        class="fa-solid fa-envelope mr-1"></i> {{ $data->student->email_campus ?? '' }}</a>
                            </span>
                        </p>
                    @endif

                    @if (!empty($data->province))
                        <p class="text-muted mb-1 font-13"><strong>Province :</strong>
                            <span class="d-block"> {{ $data->provinces->name ?? '' }}</span>
                        </p>
                    @endif

                    @if (!empty($data->region))
                        <p class="text-muted mb-1 font-13"><strong>Region :</strong>
                            <span class="d-block"> {{ $data->region }}</span>
                        </p>
                    @endif

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

                        <h5 class="mb-3 text-uppercase"><i class="fa-solid fa-graduation-cap mr-1"></i> Formal</h5>

                        <ul class="list-unstyled timeline-sm">

                            @forelse ($formal_educations as $formal)
                                <li class="timeline-sm-item">
                                    <span class="timeline-sm-date">{{ $formal->year ?? '' }}</span>
                                    <h5 class="mt-0 mb-1">{{ $formal->title ?? '' }}</h5>
                                    <p class="text-muted mt-2">{{ $formal->description ?? '' }}</p>

                                </li>

                            @empty
                                Belum ada data
                            @endforelse

                        </ul>

                        <h5 class="mb-3 text-uppercase"><i class="fa-solid fa-graduation-cap mr-1"></i> Non Formal</h5>

                        <ul class="list-unstyled timeline-sm">

                            @forelse ($non_formal_educations as $non_formal)
                                <li class="timeline-sm-item">
                                    <span class="timeline-sm-date">{{ $non_formal->year ?? '' }}</span>
                                    <h5 class="mt-0 mb-1">{{ $non_formal->title ?? '' }}</h5>
                                    <p class="text-muted mt-2">{{ $non_formal->description ?? '' }}</p>
                                </li>

                            @empty
                                Belum ada data
                            @endforelse

                        </ul>

                    </div> <!-- end tab-pane -->
                    <!-- end about me section content -->

                    <div class="tab-pane" id="profile">

                        <h5 class="mb-3 text-uppercase"><i class="fa-solid fa-file mr-1"></i> Biography</h5>
                        <p>Rincian penjelasan terkait students.</p>

                        <div>
                            {!! $data->student->profile ?? '' !!}
                        </div>

                    </div>
                    <!-- end timeline content-->

                    <div class="tab-pane show active" id="documents">

                        <h5 class="mb-2 text-uppercase"><i class="fa-solid fa-folder"></i> PINNED Document</h5>
                        <p>Dokumen yang sering digunakan atau sedang dalam tahap penggunaan.</p>

                        <div>
                            @include('dashboard.database.students.documents.create-modal')
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal"
                                data-target="#standard-modal">
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
                                        <th></th>
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
                                            @if (Auth::user()->hasRole('administrator'))
                                                <td width="200px">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a href="{{ $document->url ?? '' }}" target="_blank"
                                                                class="btn btn-success border" data-toggle="tooltip"
                                                                title='Show'><i class="fa-solid fa-file"></i></a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <form
                                                                action="{{ url(Request::segment(1) . '/' . Request::segment(2) . '/documents/destroy', $document->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger show_confirm"
                                                                    data-toggle="tooltip" title='Delete'>
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            @endif
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
                            <h5 class="my-4 text-uppercase"><i class="fa-solid fa-folder"></i> All Documents (Google
                                Sheets)</h5>

                            <p>Semua dokumen milik students yang sudah terkumpul. Daftar dokumen dijelaskan pada judul,
                                keterangan dan tipe file pada Google Sheets. Tersedia juga link untuk menampilkan secara
                                detail atau mendownloadnya.</p>

                        @empty($data->student->doc_google_sheets ?? '')

                            <div class="alert alert-info">
                                <b><i class="fa-solid fa-info-circle"></i> Info!</b> Link google sheets belum ada.
                                @if (Auth::user()->hasRole('administrator'))
                                    Silahkan <a href="{{ url('dashboard/students/edit/documents', $data->id) }}"
                                        class="font-weight-bold"><i class="fa-solid fa-pencil-square"></i> Edit</a> untuk
                                    lengkapi.
                                @endif
                            </div>
                        @else
                            <div id="doc_google_sheets">
                                {!! $data->student->doc_google_sheets ?? '' !!}
                            </div>

                        @endempty
                    </div>
                </div>
                <!-- end settings content-->

            </div> <!-- end tab-content -->
        </div> <!-- end card-box-->
    </div>

</div> <!-- end col -->
</div>
<!-- end row-->

{!! Form::close() !!}

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
                title: 'Are you sure?',
                text: "This data will be deleted permantently!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Just delete!'
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
