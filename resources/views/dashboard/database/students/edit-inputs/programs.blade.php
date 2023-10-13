@if ($errors->has('program'))
    <span role="alert">
        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3 text-danger"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('program') }}</h5>
    </span>
@endif

<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">PROGRAMS</h5>

<div>
    @include('dashboard.database.students.modals.update-program-modal',['programs',$programs])
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
                        <th >#</th>
                    </tr>
                </thead>
                <tbody>
                    @if($data->student->program)
                        @forelse($data->student->program as $program)
                        <tr>
                            <td>{{ $program->program_title ?? '' }}</td>
                            <td>{{ $program->short_description ?? '' }}</td>
                            <td class="d-flex">
                                <div class="mr-1">
                                    <form action="{{ route('dashboard.students.delete.programs', $program->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger w-100">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">Data tidak ada</td>
                        </tr>
                        @endforelse    
                    @endif
                    
                </tbody>
            </table>
        </div>

    </div>
</div>

<div class="row mt-5">
    <div class="col">
        <form action="{{ url('dashboard/student/edit/program', $data->id) }}" method="POST">
            @csrf

            @foreach ($programs as $program)

            <label for="option1">
                <input type="checkbox" name="programs[]" value="SUP Vokasi 2020" id="option1"> {{ $program->program_title ?? '' }}
            </label><br>
                
            @endforeach
    
            <button type="submit">Submit</button>
        </form>
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
