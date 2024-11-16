<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
<h1>Form Registrasi</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('register.submit') }}" method="POST">
    @csrf
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="password_confirmation">Konfirmasi Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required><br>

    <button type="submit">Daftar</button>
</form>
</body>
</html>
