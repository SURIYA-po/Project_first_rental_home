<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Listings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            margin-bottom: 20px;
        }
        .listing {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
   <div class="form-container">
        <form method="GET" action="">
            <input type="text" name="query" placeholder="Search for rentals..." required>
            <button type="submit">Search</button>
        </form>
    </div>

    <?php
    include'connect.php';
// Search logic
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['query'])) {
        $query = $conn->real_escape_string($_GET['query']);
        $sql = "SELECT * FROM Rent WHERE title LIKE '%$query%' OR description LIKE '%$query%' OR address LIKE '%$query%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Search Results</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='listing'>";
                echo "<h3>" . $row['Rent_Type'] . "</h3>";
                echo "<p>" . $row['Rent_Description'] . "</p>";
                echo "<p>Address: " . $row['Rent_Address'] . "</p>";
                echo "<p>Price: $" . $row['Rent_Price'] . "</p>";
                echo "<p>Contact Info: " . $row['contact_info'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No results found</p>";
        }
    }
    ?>
</body>
</html>