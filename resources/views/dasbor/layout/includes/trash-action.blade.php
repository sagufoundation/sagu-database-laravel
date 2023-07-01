<form action="{{ url(Request::segment(1).'/'.Request::segment(2).'/restore',$data->id) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success"> <i class="fa-solid fa-trash-arrow-up"></i> Restore</button>
</form>

<form action="{{ url(Request::segment(1).'/'.Request::segment(2).'/delete',$data->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger ms-1 show_confirm" data-toggle="tooltip" title='Delete'> <i class="fa-solid fa-trash"></i> Delete</button>
</form>