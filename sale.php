<?php
session_start(); // Start the session

                // Check if the user is logged in
                if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
                    header("Location: login.php"); // Redirect to login page if not logged in
                    exit;
                }
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Rent Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-container input, .form-container select, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Post Rent Details</h2>
        <form action="sale.php" method="POST" enctype="multipart/form-data">
            <label for="Rent_Type">Rent Type</label>
            <select name="Rent_Type" id="Rent_Type" required>
                <option value="Room">Room</option>
                <option value="Shutter">Shutter</option>
                <option value="Office">Office</option>
                <option value="Flat">Flat</option>
            </select>

            <label for="Rent_Description">Description</label>
            <textarea name="Rent_Description" id="Rent_Description" rows="4" required></textarea>

            <label for="Rent_price">Price</label>
            <input type="number" name="Rent_price" id="Rent_price" required>

            <label for="Rent_images">Upload Images</label>
            <input type="file" name="Rent_images" id="Rent_images" accept="image/*" required>

            <label for="Renter_Name">Renter Name</label>
            <input type="text" name="Renter_Name" id="Renter_Name" required>

            <label for="Renter_Contact">Renter Contact No</label>
            <input type="text" name="Renter_Contact" id="Renter_Contact" required>

            <label for="Renter_Address">Renter Address</label>
            <input type="text" name="Renter_Address" id="Renter_Address" required>

            <button type="submit" name="submit">Post Rent</button>
        </form>
    </div>

    <?php
    include 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $Rent_Type = $_POST['Rent_Type'];
        $Rent_Description = $_POST['Rent_Description'];
        $Rent_price = $_POST['Rent_price'];
        $Renter_Address = $_POST['Renter_Address'];
        $Renter_Name = $_POST['Renter_Name'];
        $Renter_Contact = $_POST['Renter_Contact'];

        // Handle file upload
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["Rent_images"]["name"]);
        move_uploaded_file($_FILES["Rent_images"]["tmp_name"], $target_file);
        $Rent_images = $target_file;

        // Insert renter details
        $sql_renter = "INSERT INTO Renter (Renter_Name, Renter_Contact) 
                       VALUES ('$Renter_Name', '$Renter_Contact')";

        if ($conn->query($sql_renter) === TRUE) {
            $renter_id = $conn->insert_id; // Get the last inserted Renter ID

            // Insert rent details
            $sql_rent = "INSERT INTO Rent (Rent_Type, Rent_Description, Rent_price, Rent_images, Renter_Address, Renter_id) 
                         VALUES ('$Rent_Type', '$Rent_Description', '$Rent_price', '$Rent_images', '$Renter_Address', '$renter_id')";

            if ($conn->query($sql_rent) === TRUE) {
                echo "Rent and renter details posted successfully.";
                header("Location: index.php"); 
            } else {
                echo "Error: " . $sql_rent . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql_renter . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
