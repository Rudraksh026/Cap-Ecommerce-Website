<?php include 'extra/connectivity.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAW</title>
    <link rel="stylesheet" href="style/shopAll.css">
    <link rel="stylesheet" href="style/external.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1cdb2a6f8a.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'extra/nav.php'; ?>
    <div class="vsjdh">
        <h3>NEW ARRIVALS</h3>
        <div class="grid">


            <?php
            $sql1 = "SELECT * FROM itemtable ORDER BY ListingDate DESC LIMIT 6;";
            $result1 = mysqli_query($conn, $sql1);
            while ($data1 = mysqli_fetch_assoc($result1)) {



                echo '<div class="card-new">
                <div class="image-new"><img src="' . $data1['ImagePath'] . '" alt=""></div>
                <div class="text">

                    <p class="title-new">' . $data1['ItemName'] . '</p>
                    <p class="price-new">&#8377;' . $data1['Price'] . '</p>
                    <form action="itemPage.php" method="post">
                        <input style="display:none;" name="id" type="text" value="' . $data1['ItemId'] . '"><br>
                    <button>Explore It</button>
                    </form>
                </div>
            </div>';
            }

            ?>

        </div>

        <h3>SHOP ALL</h3>
        <div class="grid">
            <?php
            $sql2 = "SELECT * FROM itemtable;";
            $result2 = mysqli_query($conn, $sql2);
            while ($data2 = mysqli_fetch_assoc($result2)) {



                echo '<div class="card-new">
                <div class="image-new"><img src="' . $data2['ImagePath'] . '" alt=""></div>
                <div class="text">

                    <p class="title-new">' . $data2['ItemName'] . '</p>
                    <p class="price-new">&#8377;' . $data2['Price'] . '</p>
                    <form action="itemPage.php" method="post">
                        <input style="display:none;" name="id" type="text" value="' . $data2['ItemId'] . '"><br>
                    <button>Explore It</button>
                    </form>
                </div>
            </div>';
            }

            ?>


        </div>
    </div>
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