<?php


$host = "localhost";
$user = "root";
$password = ""; 
$database = "mermaid_pearl_resort"; 

$conn = new mysqli($host, $user, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action === 'update') {
     
        $name = $_POST['name'];
        $phone_number = $_POST['phone_number'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $guests = $_POST['guests'];
        $rooms = $_POST['rooms'];
        $room_type = $_POST['room_type'];

        $query = "UPDATE bookings SET name = ?, phone_number = ?, check_in = ?, check_out = ?, guests = ?, rooms = ?, room_type = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssssiiii', $name, $phone_number, $check_in, $check_out, $guests, $rooms, $room_type, $id);

        if ($stmt->execute()) {
            header('Location: bookings.php?success=update');
        } else {
            header('Location: bookings.php?error=update');
        }
    } elseif ($action === 'delete') {
    
        $query = "DELETE FROM bookings WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            header('Location: bookings.php?success=delete');
        } else {
            header('Location: bookings.php?error=delete');
        }
    }
}
