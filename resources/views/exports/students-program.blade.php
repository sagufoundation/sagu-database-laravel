<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>

<body>
    <h1>Data Students {{ $program->program_title ?? 'Other' }}</h1>
    <table>
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @forelse ($datas as $data )
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $data->first_name }}</td>
                        <td>{{ $data->middle_name }}</td>
                        <td>{{ $data->last_name }}</td>
                        <td>{{ $data->email }}</td>
                    </tr>
            @empty
                <tr>
                    <td>Tidak ada data</td>
                </tr>
            @endforelse
    </table>
</body>

</html>
