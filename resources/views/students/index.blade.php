<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>

    <h1>Students List</h1>
    <a href="/students/create">Add New Student</a>


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
                    <td>
                        <a href="/students/{{ $student->id }}/edit">Edit</a>

                        <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
