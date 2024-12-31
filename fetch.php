<?php
$servername = "127.0.0.1";
$username = "5500";
$password = "12345678";
$dbname = "database of plant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT common_name, scientific_name, family, uses FROM plants";
$result = $conn->query($sql);

// Check if there are records
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["common_name"]. "</td><td>" . $row["scientific_name"]. "</td><td>" . $row["family"]. "</td><td>" . $row["uses"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

