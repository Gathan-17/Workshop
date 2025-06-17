<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barcelona_store"; // <-- ini diganti sesuai nama database kamu

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
