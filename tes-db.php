<?php

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=games_hub", "root", "");
    echo "Koneksi ke database berhasil!";
} catch (PDOException $e) {
    die("Gagal koneksi ke database: " . $e->getMessage());
}
