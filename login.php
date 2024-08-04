<?php include 'extra/connectivity.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAW</title>
    <link rel="stylesheet" href="style/login.css">

    <script src="https://kit.fontawesome.com/1cdb2a6f8a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="float">
        <i onclick="window.open('index.php','_self')" class="my-class fa-regular fa-circle-xmark fa-2xl" style="color: #000000;"></i>
    </div>
    <div class="main">
        <div class="flex">
            <div class="subflex">

                <h1>Log In</h1>
                <p>New to this site? <a href="signUp.php">Sign Up</a></p>
            </div>

            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                <p id="show"></p><a href="login.php" id="loginshow"></a>
                <button id="event">Log In</button>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $sql1 = "SELECT * FROM `usertable` WHERE `UserName` = '" . $_POST['email'] . "'";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_num_rows($result1);
        if ($row1 <= 0) {
    ?>
            <script>
                document.getElementById('show').innerHTML = "You Found As A New User! ";
                document.getElementById('show').style.display = "Inline";
                document.getElementById('loginshow').innerHTML = "Sign Up";
                document.getElementById('show').style.color = "Red";
                document.querySelectorAll('input')[0].style.borderColor = "Red";
                document.querySelectorAll('input')[1].style.borderColor = "Red";
            </script>
            <?php
        } else {
            $sql2 = "SELECT * FROM `usertable` WHERE `UserName` = '" . $_POST['email'] . "' AND `UserPassword` = '" . $_POST['password'] . "'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_num_rows($result2);
            if ($row2 <= 0) {
            ?>
                <script>
                    document.getElementById('show').innerHTML = "Invalid Login Details! ";
                    document.getElementById('show').style.display = "block";
                    document.getElementById('loginshow').innerHTML = "";
                    document.getElementById('show').style.color = "Red";
                    document.querySelectorAll('input')[0].style.borderColor = "Red";
                    document.querySelectorAll('input')[1].style.borderColor = "Red";
                </script>
    <?php
            } else {
                $_SESSION['UserName'] = $_POST['email'];
                echo '<script>window.open("index.php","_self")</script>';
            }
        }
    }
    ?>

</body>

</html>