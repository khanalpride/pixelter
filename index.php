<?php
  $products = [
    [
      "name"=> "Lexi Lace Crop Top",
      "price"=> 25
    ],
    [
      "name"=> "Paint It Red Seeker Shorts",
      "price"=> 18
    ],
    [
      "name"=> "Miranda Lace Hi Low Skirt",
      "price"=> 108
    ]
  ];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Title</title>
  <link media="all" rel="stylesheet" href="css/main.css">
</head>
<body>
  <div id="wrapper">
    <header id="header">
      <div class="container">
        <div class="header-holder">
          <div class="logo">
            <a href="#" class="menu-opener"><img src="images/menu.png" alt="menu" width="32" height="32"></a>
            <a href="#">
              <img src="images/blog-logo.png" alt="logo" width="153" height="38">
            </a>
          </div>
          <ul id="nav">
            <li><a href="#">Tops</a></li>
            <li><a href="#">Dresses</a></li>
            <li><a href="#">Bottoms</a></li>
            <li><a href="#">Outerwear</a></li>
            <li><a href="#">Swimwear</a></li>
            <li><a href="#">Sleepwear</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main id="main">
      <div class="product-blocks">
        <div class="container">
          <ul class="products">
            <?php foreach($products as $product): ?>
              <li>
                <a href="#" class="product">
                  <h2 class="name"><?php echo $product['name']; ?></h2>
                  <strong class="price-hold">$<span class="price"><?php echo $product['price'] ?></span></strong>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </main>
  </div>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/retina.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
