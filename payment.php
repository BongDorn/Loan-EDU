<?php
if (isset($_GET['product_id'])) {
  $productId = $_GET['product_id'];
  // Fetch product details based on $productId
  // Display payment form with product details
} else {
  // Redirect back to index page if product id is not provided
  header("Location: index.php");
  exit();
}
?>
