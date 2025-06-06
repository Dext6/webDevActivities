<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" value="{{ $student->fname }}"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" value="{{ $student->age }}"><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address">{{ $student->address }}</textarea><br><br>

        <button type="submit">Update Student</button>
    </form>

    <br>
    <a href="/students">Back to Student List</a>

</body>
</html>
