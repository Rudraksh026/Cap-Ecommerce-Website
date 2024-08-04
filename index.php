<?php include 'extra/connectivity.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAW</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/external.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1cdb2a6f8a.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'extra/nav.php'; ?>
    <div class="parallex"></div>
    <div class="oisdh">
        <div class="sub-no">
            <h1>ALWAYS BE ORIGINAL</h1>
            <p>NEW ARRIVALS ARE HERE</p>
            <button onclick="window.open('shopAll.php','_self')">Shop Now</button>
        </div>
    </div>
    <div class="vsjdh">
        <h3>LIMITED EDITION COLLECTION</h3>
        <div class="grid">


            <?php
            $sql = "SELECT * FROM itemtable LIMIT 8;";
            $result = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_assoc($result)) {



                echo '<div class="card-new">
                <div class="image-new"><img src="' . $data['ImagePath'] . '" alt=""></div>
                <div class="text">

                    <p class="title-new">' . $data['ItemName'] . '</p>
                    <p class="price-new">&#8377;' . $data['Price'] . '</p>
                    <button onclick="window.open(\'shopAll.php\',\'_self\')">Explore Me</button>
                </div>
            </div>';
            }

            ?>




        </div>
        <div class="temp-flex">
            <button onclick="window.open('shopAll.php','_self')">Shop All</button>
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