<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "Rental_home";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Rent_id, Rent_Type, Rent_Description, Rent_price, Rent_images FROM Rent WHERE Rent_Type='room'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Room Details</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            width: 300px;
            box-shadow: 2px 2px 12px #aaa;
            display: inline-block;
            vertical-align: top;
        }
        .card img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ccc;
            margin-bottom: 15px;
        }
        .card h3 {
            margin: 0;
            font-size: 1.2em;
        }
        .card p {
            margin: 10px 0;
            color: #555;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #5bc0de;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #31b0d5;
        }
        .delete-button {
            background-color: #d9534f;
        }
        .delete-button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <h1>Room Details</h1>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="../' . $row["Rent_images"] . '" alt="Room Image">';
                echo '<h3>' . $row["Rent_Type"] . '</h3>';
                echo '<p>' . $row["Rent_Description"] . '</p>';
                echo '<p>Price: $' . $row["Rent_price"] . '</p>';
                echo '<div class="button-container">';
                echo '<a href="update_post.php?id=' . $row["Rent_id"] . '" class="button">Update</a>';
                echo '<a href="delete_post.php?id=' . $row["Rent_id"] . '" class="button delete-button">Delete</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No rooms available.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
