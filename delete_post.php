<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "Rental_home";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $rent_id = $_GET['id'];

    // Delete post from the database
    $sql = "DELETE FROM Rent WHERE Rent_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $rent_id);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "No ID specified to delete.";
}

$conn->close();
?>
