@if (ENV('APP_ENV') == 'local')

<td class="p-0" width="100px">
    @if (!empty($data->picture))
        <img src="https://dbsf.sagufoundation.org/{{ $data->picture }}" alt="Profile picture" class="img img-fluid w-100">
    @elseif(!empty($student->users->picture))
        <img src="{{ asset($student->users->picture) }}" alt="Profile picture" class="img img-fluid w-100">
        <img src="https://dbsf.sagufoundation.org/{{ $data->users->picture }}" alt="Profile picture" class="img img-fluid w-100">
    @else
        <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Profile picture not found" class="img w-100">
    @endif
</td>

@else
<td class="p-0" width="100px">
    @if (!empty($data->picture))
        <img src="{{ asset($data->picture) }}" alt="Profile picture" class="img img-fluid w-100">
    @elseif(!empty($student->users->picture))
        <img src="{{ asset($student->users->picture) }}" alt="Profile picture" class="img img-fluid w-100">
    @else
        <img src="{{ asset('images/' . Request::segment(2) . '/00.jpg') }}" alt="Profile picture not found" class="img w-100">
    @endif
</td>
@endif