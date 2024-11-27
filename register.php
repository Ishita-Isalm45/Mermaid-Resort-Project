<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="stylesheet" href="./styles/login.css" />
  <title>Register</title>
</head>
<body>
  <div class="login-container">
    <div class="login-form">
      <h1 class="login-heading">Register</h1>
      <form action="register.php" method="POST">
        <div class="form-group margin-bottom">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group margin-bottom">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group margin-bottom">
          <label for="phone">Phone Number</label>
          <input type="text" id="phone" name="phone" required />
        </div>
        <div class="form-group margin-bottom">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" class="login-btn">Register</button>
      </form>
      <p class="forgot-password">
        Already have an account? <a href="./login.php">Login here</a>
      </p>
    </div>
  </div>
</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "mermaid_pearl_resort");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! <a href='index.html'>Login here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

