<?php include 'extra/connectivity.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAW</title>
  <link rel="stylesheet" href="style/itemPage.css">
  <link rel="stylesheet" href="style/external.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/1cdb2a6f8a.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include 'extra/nav.php'; ?>
  <main>
    <?php
    $id = $_POST['id'];
    $sql = "SELECT * FROM `itemtable` WHERE ItemId = '" . $id . "';";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    echo '<div class="container-main"><img src="' . $data['ImagePath'] . '" alt=""></div>
        <div class="container-main">
            <h4>' . $data['ItemName'] . '</h4>
            <p class="tag">' . $data['ItemId'] . '</p>
            <p class="price">&#8377;' . $data['Price'] . '</p>
            <form action="itemPage.php" method="post">
              <label for="size" class="tag">Size</label>
              <div class="radio-inputs">
                  <label class="radio">
                    <input type="radio" name="Size" value="Small" checked="">
                    <span class="name">Small</span>
                  </label>
                  <label class="radio">
                    <input type="radio" name="Size" value="Medium">
                    <span class="name">Medium</span>
                  </label>
                    
                  <label class="radio">
                    <input type="radio" name="Size" value="Large">
                    <span class="name">Large</span>
                  </label>
                </div>
                <label for="quantity" class="tag quantity">Quantity</label>
               <input type="number" name="quantity" id="quantity" value="1">
                <input style="display:none" type="text" name="idNew"  value="' . $data['ItemId'] . '">
                <input style="display:none" type="text" name="id"  value="' . $data['ItemId'] . '">
                <button class="buy">Add to Cart</button>
            <form>
        </div>
        <div class="container-main">
            <p class="desc">' . $data['Description'] . '</p>
        </div>
        <div class="container-main">
            <div class="container-desc">
                <i class="fa-solid fa-truck fa-xl"></i>
                <i class="fa-solid fa-wallet fa-xl"></i>
                <i class="fa-solid fa-ranking-star fa-xl"></i>
                <p>Free Delivery</p>
                <p>Cash on Delivery</p>
                <p>Top Quality Product</p>
            </div>
        </div>';
    ?>
  </main>

  <?php
  if (isset($_POST['idNew'])) {
    if (!isset($_SESSION['UserName']))
      echo '<script>window.open("login.php","_self");</script>';
    else {
      $sql1 = "INSERT INTO `carttable` (`ItemId`,`UserName`,`Size`,`Quantity`) VALUES ('" . $_POST['idNew'] . "','" . $_SESSION['UserName'] . "','" . $_POST['Size'] . "','" . $_POST['quantity'] . "');";
      $result1 = mysqli_query($conn, $sql1);
    }
  }
  ?>
  <footer>
    <div class="foot-data">
      <label for="email">Enter your email here *</label>
      <input type="email" name="" id="email">
      <button>SUBSCRIBE</button>
    </div>
  </footer>
  <div class="end">
    <p>&copy;2024 by Raw.etc. Developed by Rudraksh</p>
  </div>
</body>

</html>