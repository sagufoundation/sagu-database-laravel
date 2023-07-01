<td>
    <form action="{{ url(Request::segment(1).'/'.Request::segment(2),$data->id) }}" method="POST">
        <a class="btn btn-primary" href="{{ url(Request::segment(1).'/'.Request::segment(2).'/'.$data->id.'/edit') }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>