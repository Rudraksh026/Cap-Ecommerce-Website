<?php include 'extra/connectivity.php';
session_start(); ?>
<?php
if (isset($_SESSION['UserName'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RAW</title>
        <link rel="stylesheet" href="style/cart.css">
        <link rel="stylesheet" href="style/external.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/1cdb2a6f8a.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'extra/nav.php' ?>
        <main>
            <div class="left">
                <h5>My Cart</h5>
                <hr>

                <?php
                $sum = 0;
                $sql1 = "SELECT * FROM `carttable` INNER JOIN itemtable ON itemtable.ItemId = carttable.ItemId WHERE `UserName` = '" . $_SESSION['UserName'] . "';";
                $result1 = mysqli_query($conn, $sql1);
                while ($data = mysqli_fetch_assoc($result1)) {
                    $sum = $sum + ($data['Quantity'] * $data['Price']);
                    echo '
                    <div class="cart-item">
                <img src="' . $data['ImagePath'] . '" alt="">
                <div class="cart-item-sub">
                    <p class="product-name">' . $data['ItemName'] . '</p>
                    <p >&#8377;' . $data['Price'] . '</p>
                    <p>' . $data['Size'] . '</p>
                </div>
                <div class="price-div">
                    <p class="price">Quantity: ' . $data['Quantity'] . '</p>
                </div>
                <div class="delete">
                    <form style="width:100%;" action="cart.php" method="post">
                        <input type="text" name="CartNumber" value = "' . $data['CartNumber'] . '">
                        <button style="width:100%;" class="del">
                            <i class="fa-regular fa-trash-can fa-xl"></i>
                        </button>
                    </form>
                </div>
            </div>
            <hr>';
                }

                if (isset($_POST['CartNumber'])) {
                    $sql2 = "DELETE FROM `carttable` WHERE `carttable`.`CartNumber` = " . $_POST['CartNumber'] . ";";
                    $result2 = mysqli_query($conn, $sql2);
                }
                ?>


            </div>
            <div class="right">
                <h5>Order Summary</h5>
                <hr>
                <div class="subtotal">
                    <p class="price subtotal1">SubTotal</p>
                    <p class="price subtotal2">&#8377;<?php echo $sum; ?></p>
                </div>
                <hr>
                <div class="total">
                    <p class="total1">Total</p>
                    <p class="total2">&#8377;<?php echo $sum; ?></p>
                </div>
                <button class="check">Checkout</button>
                <p class="secure"><i class="fa-solid fa-lock fa-xl" style="color: #000000;"></i> Secure Checkout</p>
            </div>
        </main>
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
<?php
} else {
    echo '<script>window.open("login.php","_self");</script>';
}
?>