<!-- resources/views/patients/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add New Patient</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Add New Patient</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
        <br>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" value="{{ old('dob') }}">
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>