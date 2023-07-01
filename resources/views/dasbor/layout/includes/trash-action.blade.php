<td>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ url(Request::segment(1).'/'.Request::segment(2).'/restore',$data->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success w-100">
                    <i class="fa-solid fa-trash-arrow-up"></i> Restore
                </button>
            </form>
        </div>
        
        <div class="col-md-6">
            <form action="{{ url(Request::segment(1).'/'.Request::segment(2).'/delete',$data->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-100 show_confirm" data-toggle="tooltip" title='Delete'> 
                    <i class="fa-solid fa-trash"></i> Delete
                </button>
            </form>
        </div>
    </div>
</td>