<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Game - Games Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #ecf0f1;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }
        .sidebar ul li a {
            display: block;
            color: white;
            padding: 15px 20px;
            text-decoration: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .sidebar ul li a:hover {
            background-color: #34495e;
        }
        .content {
            flex: 1;
            padding: 20px;
            background-color: #ecf0f1;
        }
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card h2 {
            margin-bottom: 15px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input[type="file"] {
            padding: 5px;
        }
        .btn {
            padding: 10px 15px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #3498db;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <ul>
        <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> Dashboard</a></li>
        <li><a href="{{ route('admin.addGamePage') }}"><i class="fas fa-gamepad"></i> Tambahkan Game</a></li>
        <li><a href="{{ route('admin.updateUserCreditsPage') }}"><i class="fas fa-coins"></i> Give Points</a></li>
        <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-user"></i> Admin Account</a></li>
    </ul>
</div>

<div class="content">
    <div class="card">
        <h2>Tambahkan Game</h2>
        <form action="{{ route('admin.addGame') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama Game</label>
                <input type="text" id="name" name="name" placeholder="Masukkan Nama Game" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select id="genre" name="genre">
                    <option value="Action">Action</option>
                    <option value="Adventure">Adventure</option>
                    <option value="RPG">RPG</option>
                    <option value="Simulation">Simulation</option>
                </select>
            </div>
            <div class="form-group">
                <label for="release_date">Tanggal Rilis</label>
                <input type="date" id="release_date" name="release_date" required>
            </div>
            <div class="form-group">
                <label for="price_credits">Harga (Credits)</label>
                <input type="number" id="price_credits" name="price_credits" placeholder="Masukkan Harga dalam Credits" required>
            </div>
            <div class="form-group">
                <label for="icon">Ikon Game</label>
                <input type="file" id="icon" name="icon" accept="image/*" required>
            </div>
            <button type="submit" class="btn">Tambahkan Game</button>
        </form>
    </div>
</div>
</body>
</html>