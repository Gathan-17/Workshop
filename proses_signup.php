<?php
session_start(); // aktifkan session
$conn = new mysqli("localhost", "root", "", "barcelona_store");

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username sudah dipakai
$cek = $conn->prepare("SELECT * FROM users WHERE username = ?");
$cek->bind_param("s", $username);
$cek->execute();
$cek_result = $cek->get_result();

if ($cek_result->num_rows > 0) {
  echo "<script>alert('Username sudah digunakan!'); window.location.href='signup.php';</script>";
  exit();
}

// Tambahkan user baru
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  // ✅ LOGIN OTOMATIS: set session dan arahkan ke halaman utama
  $_SESSION['username'] = $username;
  header("Location: index.php");
  exit();
} else {
  echo "<script>alert('Gagal mendaftar!'); window.location.href='signup.php';</script>";
}

$stmt->close();
$conn->close();
?>
