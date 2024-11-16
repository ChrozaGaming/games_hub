<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/loginStyle.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Login & Register Form</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <!-- Login Form -->
            <form action="{{ route('auth.login') }}" method="POST" class="sign-in-form">
                @csrf
                <h2 class="title">Ayo Login Bunda</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" placeholder="Masukkan Email Bunda" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Masukkan Kata Sandi Bunda" required />
                </div>
                <input type="submit" value="Login" class="btn solid" />
            </form>

            <!-- Register Form -->
            <form action="{{ route('auth.register') }}" method="POST" class="sign-up-form">
                @csrf
                <h2 class="title">Daftar Dulu ya Bunda</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Masukkan Nama Bunda" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Masukkan Email Bunda" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Masukkan Password Bunda" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required />
                </div>
                <input type="submit" value="Daftar" class="btn" />
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <img src="{{ asset('imgLogin/Logo.png') }}" alt="">
                <p>Perlindungan si kecil dimulai dari sini!</p>
                <button class="btn transparent" id="sign-up-btn">Daftar</button>
            </div>
            <img src="{{ asset('imgLogin/Gambar Daftar 2.svg') }}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Sudah Punya Akun Bunda ?</h3>
                <p>Ayo login untuk melindungi si kecil mulai sekarang!</p>
                <button class="btn transparent" id="sign-in-btn">Masuk</button>
            </div>
            <img src="{{ asset('imgLogin/Gambar Login.svg') }}" class="image" alt="" />
        </div>
    </div>
</div>

<script>
    const signUpBtn = document.getElementById("sign-up-btn");
    const signInBtn = document.getElementById("sign-in-btn");
    const container = document.querySelector(".container");

    signUpBtn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
    });

    signInBtn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
    });
</script>
</body>
</html>
