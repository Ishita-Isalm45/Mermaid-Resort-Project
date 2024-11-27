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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $id = $_POST['id'];

    if (empty($id)) {
        echo "Invalid ID.";
        exit();
    }

    if ($_POST['action'] === 'update') {

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $service = $_POST['service'];

        if (empty($name) || empty($phone) || empty($service)) {
            echo "All fields are required for update.";
            exit();
        }

        $query = "UPDATE service_bookings SET name = ?, phone = ?, service = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sssi', $name, $phone, $service, $id);

        if ($stmt->execute()) {
            echo "Service booking updated successfully.";
        } else {
            echo "Error updating booking: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($_POST['action'] === 'delete') {

        $query = "DELETE FROM service_bookings WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            echo "Service booking deleted successfully.";
        } else {
            echo "Error deleting booking: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Invalid action.";
    }
} else {
    echo "Invalid request.";
}

header("Location: bookings.php");
exit();
?>
