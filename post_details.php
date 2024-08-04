<?php
include 'connect.php'; // Include your database connection file

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM Rent natural join Renter WHERE Rent_id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $row['Rent_Type']; ?> Details</title>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <h1 class="mt-5"><?php echo $row['Rent_Type']; ?></h1>
                <img src="<?php echo $row['Rent_images']; ?>" class="img-fluid" alt="">
                <p class="mt-3"><?php echo $row['Rent_Description']; ?></p>
                <p>Price: $<?php echo $row['Rent_price']; ?></p>
                <p>Address: <?php echo $row['Renter_Address']; ?></p>
                <p>Renter Contact No.: <?php echo $row['Renter_Contact']; ?></p>
                <a href="index.php" class="btn btn-primary">Back to Listings</a>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "No post found!";
    }
} else {
    echo "Invalid request!";
}

$conn->close();
?>
