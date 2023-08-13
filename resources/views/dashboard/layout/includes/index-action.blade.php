<td>
    <div class="row">
        <div class="col-md-4 p-1">
            <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/show', $data->id) }}" class="btn btn-success w-100">
                <i class="fa-solid fa-id-badge d-block"></i> Show
            </a>
        </div>
        <div class="col-md-4 p-1">
            <a class="btn btn-primary w-100" href="{{ url(Request::segment(1).'/'.Request::segment(2). '/edit/' . $data->id) }}">
                <i class="fa-solid fa-pen-to-square d-block"></i> Edit
            </a>
        </div>
        <div class="col-md-4 p-1">
            <form action="{{ url(Request::segment(1).'/'.Request::segment(2), $data->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-100">
                    <i class="fa-solid fa-trash d-block"></i> Trash
                </button>
            </form>
        </div>
    </div>
</td>