<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="stylesheet" href="./styles/login.css" />
  <title>Login & Register</title>
</head>
<body>
  <div class="login-container">
    <div class="login-form">
      <h1 class="login-heading">Login</h1>
      <form action="login.php" method="POST">
        <div class="form-group margin-bottom">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group margin-bottom">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" class="login-btn">Login</button>
      </form>
      <p class="forgot-password">
        Don't have an account? <a href="./register.php">Register here</a>
      </p>
    </div>
  </div>
</body>
</html>

<?php
session_start();

$conn = new mysqli("localhost", "root", "", "mermaid_pearl_resort");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["name"];
            $_SESSION["user_email"] = $user["email"];
            $_SESSION["user_role"] = $user["role"]; 

            if ($user["role"] === "admin") {
                header("Location: dashboard.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with this email.";
    }
}

$conn->close();
?>
