<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option defines the default authentication "guard" and password
    | reset "broker" for your application. You may change these values
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web', // Guard default untuk aplikasi
        'passwords' => 'users', // Default password broker
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Define every authentication guard for your application.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users', // Menggunakan provider "users"
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins', // Menggunakan provider "admins"
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | User providers define how users are retrieved from the database.
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class, // Model untuk tabel "users"
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\UserAdmin::class, // Model untuk tabel "users_admin"
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | These options specify the behavior of Laravel's password reset feature.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens', // Tabel untuk reset password
            'expire' => 60, // Masa berlaku token (dalam menit)
            'throttle' => 60, // Waktu tunggu sebelum mencoba reset lagi
        ],
        'admins' => [
            'provider' => 'admins', // Provider untuk admin
            'table' => 'password_reset_tokens', // Tabel reset password (bisa digunakan bersama)
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Jumlah detik sebelum konfirmasi ulang password diperlukan.
    |
    */

    'password_timeout' => 10800,

];
