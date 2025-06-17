<?php
session_start();

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "barcelona_store");
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah user ada di database
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
session_start(); // penting agar session bisa digunakan

// Setelah login berhasil:
$_SESSION['username'] = $username; // username yang login disimpan
header("Location: index.php");
exit;


// Jika cocok, simpan session dan redirect
if ($result->num_rows > 0) {
  $_SESSION['username'] = $username;
  header("Location: index.php");
  exit();
} else {
  echo "<script>alert('Login gagal!'); window.location.href='login.php';</script>";
}

$stmt->close();
$conn->close();
?>
