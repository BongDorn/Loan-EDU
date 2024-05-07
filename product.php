<?php

// Array of featured products 
$featured_products = [
  [
    'name' => 'Product 1',
    'image' => 'product1.jpg', 
    'description' => 'Description for product 1',
    'price' => 19.99
  ],
  [  
    'name' => 'Product 2',
    'images' => 'images/bottle.j',
    'description' => 'Description for product 2',
    'price' => 29.99
  ],
  // Add more products here
  [
    'name' => 'Product 3', 
    'image' => 'product3.jpg',
    'description' => 'Description for product 3',
    'price' => 39.99
  ]  
];

?>

<?php include 'includes/header.php'; ?>

<!-- Display featured products -->
<div class="featured-products">

<?php foreach ($featured_products as $product): ?>

  <div class="product">
    <img src="<?php echo $product['images/bottle.j']; ?>" alt="<?php echo $product['bottle.j']; ?>">
    
    <h3><?php echo $product['name']; ?></h3>
    
    <p><?php echo $product['description']; ?></p>
    
    <span class="price">$<?php echo $product['price']; ?></span>
    
    <button>Add to Cart</button>
  </div>

<?php endforeach; ?>

</div>

<?php include 'includes/footer.php'; ?>
<p>Gender # :<b><?php echo $row['gender'] ?></b></p>
								 <p>Date of Brirth # :<b><?php echo $row['date_of_birth'] ?></b></p>
								 <p>marital_status # :<b><?php echo $row['marital_status'] ?></b></p>
								 <p>id_type # :<b><?php echo $row['id_type'] ?></b></p>
								 <p>id_number # :<b><?php echo $row['id_number'] ?></b></p>
								 <p>address # :<b><?php echo $row['address'] ?></b></p>
								 <p>province # :<b><?php echo $row['province'] ?></b></p>
								 <p>distict # :<b><?php echo $row['distict'] ?></b></p>
								 <p>commune # :<b><?php echo $row['commune'] ?></b></p>
								 <p>village # :<b><?php echo $row['village'] ?></b></p>
								 <p>occupation # :<b><?php echo $row['occu'] ?></b></p>
								 <p>phone # :<b><?php echo $row['revenue'] ?></b></p>
								 <p>revenue # :<b><?php echo $row['phone'] ?></b></p>
								 <p>Photo # :<b><?php echo $row['photo'] ?></b></p>
								 <p>Map # :<b><?php echo $row['map'] ?></b></p>


                 .$row['gender']. ','.$row['date_of_birth'].' '.$row['marital_status']
								.$row['id_type'].", ".$row['id_number'].' '.$row['address']
								.$row['province'].", ".$row['distict'].' '.$row['commune']
								.$row['village'].", ".$row['occu'].' '.$row['revenue']
								.$row['phone'].", ".$row['photo'].' '.$row['map']