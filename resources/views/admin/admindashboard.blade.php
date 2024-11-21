<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/adminStyle.css') }}">
</head>
<body>
<h1>Admin Dashboard</h1>

<!-- Form Tambah Game -->
<h2>Tambah Game</h2>
<form action="{{ route('admin.addGame') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Game" required>
    <input type="text" name="genre" placeholder="Genre" required>
    <input type="date" name="release_date" placeholder="Tanggal Rilis" required>
    <input type="number" name="price" placeholder="Harga Credits" required>
    <button type="submit">Tambah Game</button>
</form>

<!-- Form Pilih User dan Tambah Credits -->
<h2>Kelola User</h2>
<form action="{{ route('admin.updateUserCredits') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email User" required>
    <input type="number" name="credits" placeholder="Tambahkan Credits" required>
    <button type="submit">Update Credits</button>
</form>
</body>
</html>
