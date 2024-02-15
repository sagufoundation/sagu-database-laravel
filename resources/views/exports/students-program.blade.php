<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>

<body>
    <h1>Data Students {{ $program->program_title }}</h1>
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
            @php
                $students = $data->students ?? '';
            @endphp
            @forelse ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->users->first_name }}</td>
                    <td>{{ $student->users->middle_name }}</td>
                    <td>{{ $student->users->last_name }}</td>
                    <td>{{ $student->users->email }}</td>
                </tr>
            @empty
                <tr>
                    <td>Tidak ada data</td>
                </tr>
            @endforelse
        @empty
            <tr>
                <td>Tidak ada data</td>
            </tr>
        @endforelse
    </table>
</body>

</html>
