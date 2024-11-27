<?php
session_start();

$host = "localhost";
$user = "root";
$password = ""; 
$database = "mermaid_pearl_resort"; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['user_email'])) {
    header('Location: login.php'); 
    exit();
}

$query = "SELECT * FROM bookings";
$result = $conn->query($query);
$bookings = $result->fetch_all(MYSQLI_ASSOC);

$query_service = "SELECT * FROM service_bookings";
$result_service = $conn->query($query_service);
$service_bookings = $result_service->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/bookings.css">
    <title>Bookings</title>
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

    <section class="bookings-section">
        <h1 class="mt-10">Bookings</h1>
      
        <?php if (count($bookings) > 0): ?>
            <h2 class="mt-10">Room Bookings</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Guests</th>
                        <th>Rooms</th>
                        <th>Room Type</th>
                        <th>Booking Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookings as $booking): ?>
                        <tr>
                            <form action="update_delete_booking.php" method="POST">
                                <input type="hidden" name="id" value="<?= $booking['id'] ?>">
                                <td><?= $booking['id'] ?></td>
                                <td><input type="text" name="name" value="<?= $booking['name'] ?>" required></td>
                                <td><?= $booking['email'] ?></td>
                                <td><input type="text" name="phone_number" value="<?= $booking['phone_number'] ?>" required></td>
                                <td><input type="date" name="check_in" value="<?= $booking['check_in'] ?>" required></td>
                                <td><input type="date" name="check_out" value="<?= $booking['check_out'] ?>" required></td>
                                <td><input type="number" name="guests" value="<?= $booking['guests'] ?>" required></td>
                                <td><input type="number" name="rooms" value="<?= $booking['rooms'] ?>" required></td>
                                <td>
                                    <select name="room_type" required>
                                        <option value="Single" <?= $booking['room_type'] == 'Single' ? 'selected' : '' ?>>Single</option>
                                        <option value="Double" <?= $booking['room_type'] == 'Double' ? 'selected' : '' ?>>Double</option>
                                        <option value="Suite" <?= $booking['room_type'] == 'Suite' ? 'selected' : '' ?>>Suite</option>
                                    </select>
                                </td>
                                <td><?= $booking['booking_date'] ?></td>
                                <td>
                                    <button type="submit" name="action" value="update">Update</button>
                                    <button type="submit" name="action" value="delete" class="delete-btn">Delete</button>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No room bookings found.</p>
        <?php endif; ?>

        <h2 class="mt-10">Service Bookings</h2>
        <?php if (count($service_bookings) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Booking Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($service_bookings as $service_booking): ?>
                        <tr>
                            <form action="update_delete_service_booking.php" method="POST">
                                <input type="hidden" name="id" value="<?= $service_booking['id'] ?>">
                                <td><?= $service_booking['id'] ?></td>
                                <td><input type="text" name="name" value="<?= $service_booking['name'] ?>" required></td>
                                <td><input type="text" name="phone" value="<?= $service_booking['phone'] ?>" required></td>
                                <td><?= $service_booking['email'] ?></td>
                                <td><input type="text" name="service" value="<?= $service_booking['service'] ?>" required></td>
                                <td><?= $service_booking['booking_date'] ?></td>
                                <td>
                                    <button type="submit" name="action" value="update">Update</button>
                                    <button type="submit" name="action" value="delete" class="delete-btn">Delete</button>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No service bookings found.</p>
        <?php endif; ?>
    </section>
</body>
</html>
