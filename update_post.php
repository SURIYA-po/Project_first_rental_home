<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "Rental_home";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update post in the database
    $rent_id = $_POST['Rent_id'];
    $rent_type = $_POST['Rent_Type'];
    $rent_description = $_POST['Rent_Description'];
    $rent_price = $_POST['Rent_Price'];
    $rent_images = $_POST['Rent_images'];

    $sql = "UPDATE Rent SET Rent_Type=?, Rent_Description=?, Rent_price=?, Rent_images=? WHERE Rent_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdsi", $rent_type, $rent_description, $rent_price, $rent_images, $rent_id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
} else {
    // Display post details in form for updating
    $rent_id = $_GET['id'];
    $sql = "SELECT Rent_Type, Rent_Description, Rent_price, Rent_images FROM Rent WHERE Rent_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $rent_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Post</title>
    <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 12px #aaa;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group button {
            padding: 10px 20px;
            color: #fff;
            background-color: #5bc0de;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #31b0d5;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
    <script>
        function validateForm() {
            var rentType = document.forms["updateForm"]["Rent_Type"].value;
            var rentDescription = document.forms["updateForm"]["Rent_Description"].value;
            var rentPrice = document.forms["updateForm"]["Rent_Price"].value;

            if (rentType == "" || rentDescription == "" || rentPrice == "") {
                document.getElementById("error-message").innerHTML = "All fields must be filled out";
                return false;
            }

            if (isNaN(rentPrice) || rentPrice <= 0) {
                document.getElementById("error-message").innerHTML = "Price must be a positive number";
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Update Post</h2>
        <form name="updateForm" action="update_post.php" method="POST" onsubmit="return validateForm()">
            <input type="hidden" name="Rent_id" value="<?php echo $rent_id; ?>">
            <div class="form-group">
                <label for="Rent_Type">Rent Type:</label>
                <input type="text" id="Rent_Type" name="Rent_Type" value="<?php echo htmlspecialchars($row['Rent_Type']); ?>">
            </div>
            <div class="form-group">
                <label for="Rent_Description">Rent Description:</label>
                <textarea id="Rent_Description" name="Rent_Description"><?php echo htmlspecialchars($row['Rent_Description']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="Rent_Price">Rent Price:</label>
                <input type="text" id="Rent_Price" name="Rent_Price" value="<?php echo htmlspecialchars($row['Rent_price']); ?>">
            </div>
            <div class="form-group">
                <label for="Rent_images">Rent Images URL:</label>
                <input type="text" id="Rent_images" name="Rent_images" value="<?php echo htmlspecialchars($row['Rent_images']); ?>">
            </div>
            <div class="form-group">
                <button type="submit">Update</button>
            </div>
            <div id="error-message" class="error"></div>
        </form>
    </div>
</body>
</html>
