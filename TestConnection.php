<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database MySQL" . PHP_EOL;

    // menutup koneksi PDO
    $connection = null;
} catch (PDOException $exception) {
    echo "Gagal Terkoneksi ke database MySQL : " . $exception->getMessage() . PHP_EOL;
}