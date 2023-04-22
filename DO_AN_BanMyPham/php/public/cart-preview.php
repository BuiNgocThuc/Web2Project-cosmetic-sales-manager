<?php
// Connect to database
session_start();
include("../connectDB.php");
$db = new ConnectDB();
$conn = $db->getConnection();
// Select cart items
$sql = "SELECT * FROM cart WHERE USER_ID = 'KH1' LIMIT 5";
$result = mysqli_query($conn, $sql);

// Output cart items as HTML
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="cart-item">';
    echo '<div class="cart-item-name">' . $row['PRODUCT_NAME'] . '</div>';
    echo '<div class="cart-item-price">' . $row['PRICE'] . '</div>';
    echo '</div>';
  }
} else {
  echo 'No items in cart';
}

// Close database connection
mysqli_close($conn);
?>
