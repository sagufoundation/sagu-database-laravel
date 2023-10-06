{!! Form::open(array('url' => route('dasbor.siswa.educations.store'),'files'=>'true')) !!}
@csrf

<!-- Standard modal content -->
<div id="education-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="education-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="education-modalLabel">New Education History</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="siswa_id" value="{{ $data->id ?? '' }}">

                <div class="mb-3">
                    <label for="year" class="form-label">Year of completion <span class="text-danger">*</span></label>
                    <input type="text" name="year" id="year" value="{{ old('year') ?? '' }}" placeholder="Year of completion" class="form-control">
                    @if ($errors->has('year'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('year') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="form-group">
                    <label for="category" class="form-label d-block">Category</label>
                    <select name="category" class="form-control" id="exampleFormControlSelect1">
                        <option hidden>Pilih</option>
                        <option value="Formal">Formal</option>
                        <option value="Informal">Informal</option>
                    </select>
                    @if ($errors->has('category'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('category') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input item end-->

                <div class="mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title') ?? '' }}" placeholder="Title" class="form-control">
                    @if ($errors->has('title'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('title') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ old('description') ?? '' }}</textarea>
                    @if ($errors->has('description'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('description') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="mb-3">
                    <label for="url" class="form-label">Document(s) (certificate or any other docs via google drive link)</label>
                    <input type="text" name="url" id="url" value="{{ old('url') ?? '' }}" placeholder="Google Drive url" class="form-control">
                    @if ($errors->has('url'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('url') }}</small>
                        </span>
                    @endif
                    <small class="text-muted mt-1 d-block">
                        <i class="fa-solid fa-info-circle"></i> URL atau alamat dokumen diambil dari google alamat file di dalam google drive.
                    </small>
                </div>
                <!-- input group end -->

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

{!! Form::close() !!}
