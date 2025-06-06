<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>

    <h1>Add New Student</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/students" method="POST">
        @csrf
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" value="{{ old('fname') }}"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" value="{{ old('age') }}"><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address">{{ old('address') }}</textarea><br><br>

        <button type="submit">Add Student</button>
    </form>

    <br>
    <a href="/students">Back to Student List</a>

</body>
</html>
