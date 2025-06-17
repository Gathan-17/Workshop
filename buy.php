<?php
session_start();

// Cek login
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "barcelona_store");
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Pembelian Jersey</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #002147, #a50044);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 30px 40px;
      border-radius: 16px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.25);
      width: 100%;
      max-width: 450px;
    }

    .form-container h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container select,
    .form-container button {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
    }

    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container select {
      background-color: #fff;
      color: #000;
    }

    .form-container button {
      background-color: #a50044;
      color: #fff;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .form-container button:hover {
      background-color: #c8102e;
    }

    .success {
      text-align: center;
      background: rgba(0, 255, 0, 0.1);
      padding: 20px;
      border-radius: 12px;
    }
  </style>
</head>
<body>

<div class="form-container">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['address'])) {
  // Langkah 1: Tampilkan form lengkap
  $jersey = htmlspecialchars($_POST['jersey']);
  echo "<h2>Buy Jersey: $jersey</h2>";
  echo '
    <form method="post" action="buy.php">
      <input type="hidden" name="jersey" value="' . $jersey . '">
      <input type="text" name="address" placeholder="Enter your full address" required>
      <select name="size" required>
        <option value="">-- Select Size --</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
      </select>
      <input type="number" name="quantity" placeholder="Enter quantity" min="1" required>
      <button type="submit">Submit</button>
    </form>
  ';
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['address'])) {
  // Langkah 2: Simpan ke database & hitung harga
  $jersey = $_POST['jersey'];
  $address = $_POST['address'];
  $size = $_POST['size'];
  $quantity = $_POST['quantity'];
  $username = $_SESSION['username'];

  // Tentukan harga
  $jersey_lower = strtolower($jersey);
  if (strpos($jersey_lower, 'limited') !== false) {
    $harga_per_jersey = 7000000;
  } else {
    $harga_per_jersey = 3000000;
  }

  $total_harga = $harga_per_jersey * $quantity;

  // Simpan ke database
  $sql = "INSERT INTO pembelian (username, jersey, address, size, quantity) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssi", $username, $jersey, $address, $size, $quantity);

  if ($stmt->execute()) {
    echo '<div class="success">
      <h2>Success!</h2>
      <p>Thank you for purchasing <strong>' . htmlspecialchars($jersey) . '</strong> in size <strong>' . $size . '</strong> (Qty: ' . $quantity . ').</p>
      <p>Harga per jersey: Rp ' . number_format($harga_per_jersey, 0, ',', '.') . '</p>
      <p><strong>Total Harga: Rp ' . number_format($total_harga, 0, ',', '.') . '</strong></p>
    </div>';
  } else {
    echo "<p>Error: " . $conn->error . "</p>";
  }

  $stmt->close();
}

$conn->close();
?>
</div>

</body>
</html>
