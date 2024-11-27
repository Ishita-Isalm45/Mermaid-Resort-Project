<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/room_details.css">
    <title>Mermaid Pearl Resort</title>
</head>
<body>
    <header class="header d-flex-between">
        <div>
            <a class="contact"><i class="fa-solid fa-phone"></i> +012 345 6789</a>
            <a class="contact"><i class="fa-regular fa-envelope"></i> contact@company.com</a>
        </div>
    </header>
    <nav class="navbar d-flex-between">
        <div>
            <a href="./index.php" class="name">Mermaid</a><br>
            <a href="./index.php" class="name-bottom">Pearl Resort</a>
        </div>
        <div class="menu-options">
            <a href="./index.php">HOME</a>
            <a href="./about_us.php">ABOUT US</a>
            <a href="./service_booking.php">OUR SERVICES</a>
            <a href="./bookings.php">MY BOOKINGS</a>
            <a href="logout.php" class="logout-btn">LOGOUT</a>
        </div>
    </nav>

     <section class="room-details">
        <div class="booking-form">
            <div class="booking-form-inside">
                <form action="service_booking.php" method="POST">
                    <h1 class="booking-head color-primary">BOOK A SERVICE</h1>
                    <p>Name</p>
                    <input class="margin-bottom" type="text" name="name" required>
                    <p>Phone</p>
                    <input class="margin-bottom" type="number" name="phone" required>
                    <p>Email</p>
                    <input class="margin-bottom" type="email" name="email" required>
                    <div class="margin-bottom">
                        <label for="service">Select Service</label>
                        <select name="service" id="service" class="extra-service">
                            <option value="wifi">Strong Wifi</option>
                            <option value="pool">Personal Pool</option>
                            <option value="cleaning">Room Cleaning</option>
                            <option value="car">Car Wash</option>
                            <option value="laundry">Laundry</option>
                            <option value="gym">Gym</option>
                            <option value="airport">Airport Pickup</option>
                            <option value="other">Other Facilities</option>
                        </select>
                    </div>
                    <input class="book-btn" type="submit" value="BOOK NOW">
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-details">
            <div>
                <h3 class="name">Mermaid</h3>
                <p class="name-bottom">Pearl Resort</p>
                <p>
                    We started building our hotel in 1995. Since<br>
                    then, we’ve grown into the hotel with the best<br>
                    client service in our country
                </p>
            </div>
            <div>
                <h3>Useful Links</h3>
                <ul>
                    <li>About Us</li>
                    <li>Contact Us</li>
                    <li>Terms & Conditions</li>
                    <li>Help Desk</li>
                </ul>
            </div>
            <div>
                <h3>Address</h3>
                <p>
                    26/7 Kolatoli, <br> 
                    Cox's Bazar, Bangladesh
                </p>
                <a class="color-primary" href="">View Map</a>
            </div>
            <div>
                <h3>Contact Us</h3>
                <p>+012 345 6789</p>
                <p>example@company.com</p>
                <div class="socials">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="foot">
            <p>© 2022 All Rights Reserved. Developed By Ishita</p>
        </div>
    </footer>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mermaid_pearl_resort";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bookingMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $service = $_POST['service'];

    $sql = "INSERT INTO service_bookings (name, phone, email, service)
            VALUES ('$name', '$phone', '$email', '$service')";

    if ($conn->query($sql) === TRUE) {
        $bookingMessage = "Service booking successful!";
    } else {
        $bookingMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<script>
    const bookingMessage = "<?php echo $bookingMessage; ?>";
    if (bookingMessage) {
        alert(bookingMessage);
        window.location.replace("./index.php");
    }
</script>
