<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
// host
$host = "localhost";

// username
$username = "root";

// password
$pass = "";

// database name
$db = "db_perpustakaan.sql";

// port
$port = 3306;

// connect to db
$conn = mysqli_connect($host, $username, $pass, $db, $port);

// if cant connect
if ($conn->connect_error) {
  die("Koneksi Gagal: " . $koneksi->connect_error);
}

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>