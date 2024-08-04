<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "Rental_home";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Rent_Type, Rent_Description, Rent_price, Rent_images FROM Rent WHERE Rent_Type='shutter'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shutter Services</title>
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
    </style>
</head>
<body>
    <h1>Flat services</h1>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="../' . $row["Rent_images"] . '" alt="Room Image">';
                echo '<h3>' . $row["Rent_Type"] . '</h3>';
                echo '<p>' . $row["Rent_Description"] . '</p>';
                echo '<p>Price: $' . $row["Rent_price"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "No flats available.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
