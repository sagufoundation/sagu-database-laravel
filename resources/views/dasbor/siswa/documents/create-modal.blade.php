{!! Form::open(array('url' => route('dasbor.documents.store'),'files'=>'true')) !!}
@csrf

<!-- Standard modal content -->
<div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">New Document</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="siswa_id" value="{{ $data->id ?? '' }}">

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
                    <input type="text" name="description" id="description" value="{{ old('description') ?? '' }}" placeholder="Description" class="form-control">
                    @if ($errors->has('description'))
                        <span class="text-danger" role="alert">
                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('description') }}</small>
                        </span>
                    @endif
                </div>
                <!-- input group end -->

                <div class="mb-3">
                    <label for="url" class="form-label">URL</label>
                    <input type="text" name="url" id="url" value="{{ old('url') ?? '' }}" placeholder="url" class="form-control">
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
                    <i class="fa-solid fa-upload"></i> Upload
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{!! Form::close() !!}