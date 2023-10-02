<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">PROGRAMS</h5>

<div>
    @include('dasbor.siswa.education.create-education-modal')
    <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#education-modal">
        <i class="fa-solid fa-plus-square"></i> Add
    </button>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="table-responsive border">
            <table class="table table-borderles">
                <thead>
                    <tr>
                        <th>Name Program</th>
                        <th>Description</th>
                        <th>Program Start</th>
                        <th>Program End</th>
                        <th >#</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data->student->program as $program)
                    <tr>
                        <td>{{ $program->program_title ?? '' }}</td>
                        <td>{{ $program->short_description ?? '' }}</td>
                        <td>{{ $program->program_start ?? '' }}</td>
                        <td>{{ $program->program_end ?? '' }}</td>
                        <td class="d-flex">
                            <div class="mr-1">
                                <a href="#" target="_blank"
                                    class="btn btn-sm btn-outline-danger w-100 border" data-toggle="tooltip"
                                    title='Delete'><i class="fa-solid fa-trash"></i></a>
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
</div>

{{-- <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">PROGRAMS</h5>

<div class="row">
    <div class="col-md-4">

        @foreach ($programs as $program)

        <div class="form-check mb-1">
            <input class="form-check-input" type="checkbox" name="programs[]" value="{{ $program->id }}"
                id="{{ $program->id }}" @foreach ($data_programs as $item) @if ($item==$data ) checked @endif
                @endforeach>
            <label class="form-check-label" for="{{ $program->id }}">

                {{ $program->program_title }} | {{ $program->id }}
            </label>
        </div>

        @endforeach

    </div>

</div>

<button type="submit" class="btn btn-sm btn-lg btn-primary waves-effect waves-light">
    <i class="fa-solid fa-save mr-1"></i> Save
</button>
<!-- submit button end --> --}}
