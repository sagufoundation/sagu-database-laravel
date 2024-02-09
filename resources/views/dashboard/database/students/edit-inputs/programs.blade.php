@if ($errors->has('program'))
    <span role="alert">
        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3 text-danger"><i class="fe-alert-triangle mr-1"></i>
            {{ $errors->first('program') }}</h5>
    </span>
@endif

<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">PROGRAMS</h5>


<div class="row">
    <div class="col">
        {!! Form::model($data, [
            'url' => 'dashboard/student/edit/program' . Request::segment(5) . '/' . $data->id,
            'method' => 'put',
            'files' => 'true',
        ]) !!}
        @csrf



        @foreach ($programs as $program)
            <label for="option{{ $program->id }}">
                <input type="checkbox" name="programs[]" value="{{ $program->id }}" id="option{{ $program->id }}"
                    @if ($data->student != null) @foreach ($data->student->program as $student_program)
                            @if ($student_program->id === $program->id) {{ 'checked' }} @endif
                    @endforeach>
                {{ $program->program_title ?? '' }}
            </label><br>
        @else
            >{{ $program->program_title ?? '' }}
            </label><br>
        @endif

        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
