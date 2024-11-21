<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Games Hub</title>
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
        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }
        .sidebar ul li {
            width: 100%;
        }
        .sidebar ul li a {
            display: block;
            color: white;
            padding: 15px 20px;
            text-decoration: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        .sidebar ul li a:hover {
            background-color: #34495e;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        /* Header Styles */
        .header {
            width: 100%;
            height: 60px;
            background-color: #34495e;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            z-index: 1000;
            left: 250px;
        }
        .header .title {
            font-size: 18px;
            font-weight: bold;
        }
        .header .logout {
            text-decoration: none;
            color: white;
            background-color: #e74c3c;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .header .logout:hover {
            background-color: #c0392b;
        }
        /* Main Content */
        .content {
            margin-top: 60px;
            margin-left: 250px;
            padding: 20px;
        }
        .content h2 {
            margin-bottom: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card h3 {
            margin-bottom: 10px;
        }
        .card p {
            margin: 0;
        }
    </style>
</head>
<body>
<!-- Sidebar -->
<div class="sidebar">
    <div class="logo">Games Hub</div>
    <ul>
        <li><a href="{{ route('admin.addGamePage') }}"><i class="fas fa-gamepad"></i> Tambahkan Game</a></li>
        <li><a href="{{ route('admin.updateUserCredits') }}"><i class="fas fa-coins"></i> Give Points</a></li>
        <li><a href="#"><i class="fas fa-user"></i> Admin Account</a></li>
    </ul>
</div>

<!-- Header -->
<div class="header">
    <div class="title">Admin Dashboard</div>
    <a href="{{ route('admin.logout') }}" class="logout">Logout</a>
</div>

<!-- Main Content -->
<div class="content">
    <h2>Welcome, Admin!</h2>
{{--    <div class="card">--}}
{{--        <h3>Tambahkan Game</h3>--}}
{{--        <p>Gunakan fitur ini untuk menambahkan game baru ke katalog Games Hub.</p>--}}
{{--    </div>--}}
{{--    <div class="card">--}}
{{--        <h3>Give Points</h3>--}}
{{--        <p>Atur atau tambahkan poin kepada pengguna sesuai kebutuhan.</p>--}}
{{--    </div>--}}
{{--    <div class="card">--}}
{{--        <h3>Admin Account</h3>--}}
{{--        <p>Kelola informasi akun admin atau lakukan pengaturan lainnya.</p>--}}
{{--    </div>--}}
</div>
</body>
</html>
