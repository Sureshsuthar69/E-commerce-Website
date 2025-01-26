<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "cart");

// Check connection
if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}

// Get the product ID and quantity from the URL
$product_id = $_GET['id'];
$quantity = $_GET['quantity'];

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  // If not, redirect to the login page
  header('Location: login.php');
  exit;
}

// Check if the product is already in the cart
$query = "SELECT * FROM cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  // If it is, update the quantity
  $query = "UPDATE cart SET quantity = quantity + '$quantity' WHERE user_id = '$user_id' AND product_id = '$product_id'";
  mysqli_query($conn, $query);
} else {
  // If not, add it to the cart
  $query = "INSERT INTO cart (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', '$quantity')";
  mysqli_query($conn, $query);
}

// Redirect back to the home page
header('Location: home.php');
exit;

// Close the database connection
mysqli_close($conn);
?>