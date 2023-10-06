
<form action="{{ route('dashboard.students.update.programs',$data->id) }}" method="POST">
    @csrf
@method('put')

    <!-- Standard modal content -->
    <div id="education-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="education-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="education-modalLabel">New Program</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $data->id ?? '' }}">

                    <div class="form-group">
                        <label for="program" class="form-label d-block">Name Program</label>
                        <select name="program" class="form-control" id="exampleFormControlSelect1">
                            <option hidden>Pilih</option>
                            @foreach ($programs as $program )

                            <option value="{{ $program->id }}">{{ $program->program_title }}</option>
                            @endforeach

                        </select>
                    </div>
                    <!-- input item end-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        <i class="fa-solid fa-times"></i> Cancle
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-plus-square"></i> Add
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</form>

