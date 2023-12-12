<?php

// Connect ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tokoskincare";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Buat database baru
$sql = "CREATE DATABASE tokoskincare";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat";
} else {
    echo "Error creating database: " . $conn->error;
}

// Buat tabel baru
$sql = "CREATE TABLE Face wash (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    alamat VARCHAR(50) NOT NULL,
    telepon VARCHAR(15)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel berhasil dibuat";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert data ke tabel
$sql = "INSERT INTO Face wash (nama, harga) VALUES ('Garnier', 30000), ('emina', 25000), ('Kahf', 35000)";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

// Update data di tabel
$sql = "UPDATE Face wash SET harga = 40000 WHERE nama = 'Garnier'";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diupdate";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>