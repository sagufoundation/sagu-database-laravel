<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students </title>
</head>

<body>
    <h1>All Students</h1>
    <table>
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Province</th>
            <th>Full Address</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($datas as $data)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $data->first_name ?? '-' }}</td>
            <td>{{ $data->middle_name ?? '-' }}</td>
            <td>{{ $data->last_name ?? '-' }}</td>
            <td>{{ $data->gender ?? '-' }}</td>
            <td>{{ $data->email ?? '-' }}</td>
            <td>{{ $data->phone ?? '-' }}</td>
            <td>{{ $data->student->provinsi->name ?? '' }}</td>
            <td>{{ $data->student->full_address ?? '-' }}</td>
            <td>{{ $data->created_at}}</td>
            <td>{{ $data->updated_at}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
