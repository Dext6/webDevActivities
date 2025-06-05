<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>

    <h1>Students List</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Age</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->fname }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
