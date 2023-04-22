<?php
// Connect to database
session_start();
include("../connectDB.php");
$db = new ConnectDB();
$conn = $db->getConnection();
// Select cart count
$sql = "SELECT COUNT(*) AS count FROM cart WHERE USER_ID = 'KH1'";
$result = mysqli_query($conn, $sql);

// Check if query was successful
if ($result) {
// Fetch result as associative array
$row = mysqli_fetch_assoc($result);

// Get count value from array
$count = $row['count'];

// Output count value
echo $count;
} else {
// Output error message if query failed
echo "Error: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>