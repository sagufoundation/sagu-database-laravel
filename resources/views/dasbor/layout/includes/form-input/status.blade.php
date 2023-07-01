@if(Request::segment(3) == 'create')
          <div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select class="custom-select" name="status">
                  <option value="Draft" selected>Draft</option>
                  <option value="Publish">Publish</option>
                </select>
          </div>
          <!-- input group end -->
@else
          <div class="mb-3">
            <select class="custom-select" name="status">
                <option value="Draft" @if($data->status == 'Draft') selected @endif>Draft</option>
                <option value="Publish" @if($data->status == 'Publish') selected @endif>Publish</option>
            </select>
          </div>
          <!-- input group end -->
@endif



