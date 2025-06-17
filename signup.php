<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <style>
    body {
      background: linear-gradient(to right, #003087, #A50044); /* biru ke merah */
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .signup-container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 30px 40px;
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);
      text-align: center;
      color: white;
      max-width: 350px;
      width: 100%;
    }

    h2 {
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 8px;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #A50044;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #870033;
    }

    a {
      color: #FFD700;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="signup-container">
    <h2>Register / Sign Up</h2>
    <form method="POST" action="proses_signup.php">
      <input type="text" name="username" placeholder="Enter username" required><br>
      <input type="password" name="password" placeholder="Enter password" required><br>
      <input type="submit" value="Daftar">
    </form>
    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
  </div>

</body>
</html>
