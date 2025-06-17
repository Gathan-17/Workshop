<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #003087, #A50044);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: white;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.3);
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      padding: 10px;
      width: 90%;
      margin: 10px 0;
      border-radius: 8px;
      border: none;
      font-size: 16px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background: #A50044;
      border: none;
      border-radius: 8px;
      color: white;
      cursor: pointer;
      font-size: 16px;
    }

    .show-password {
      cursor: pointer;
      margin-top: -5px;
      font-size: 14px;
      color: #FFD700;
      display: inline-block;
    }

    .show-password:hover {
      text-decoration: underline;
    }

    .signup-link {
      margin-top: 20px;
      font-size: 14px;
    }

    .signup-link a {
      color: #FFD700;
      text-decoration: none;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="proses_login.php">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" id="password" placeholder="Password" required><br>

      <?php
        if (isset($_POST['jersey_id'])) {
          echo '<input type="hidden" name="jersey_id" value="' . $_POST['jersey_id'] . '">';
          echo '<input type="hidden" name="jersey_nama" value="' . $_POST['jersey_nama'] . '">';
          echo '<input type="hidden" name="harga" value="' . $_POST['harga'] . '">';
        }
      ?>
      
      <span class="show-password" onclick="togglePassword()">👁️ Show/Hide Password</span><br><br>
      <input type="submit" value="Login">
    </form>

    <div class="signup-link">
      Belum punya akun? <a href="signup.php">Signup di sini</a>
    </div>
  </div>

  <script>
    function togglePassword() {
      const passInput = document.getElementById('password');
      passInput.type = (passInput.type === "password") ? "text" : "password";
    }
  </script>

</body>
</html>
