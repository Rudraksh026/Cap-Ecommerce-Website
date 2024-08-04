<?php include 'extra/connectivity.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAW</title>
    <link rel="stylesheet" href="style/SignUp.css">

    <script src="https://kit.fontawesome.com/1cdb2a6f8a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="float">
        <i onclick="window.open('index.php','_self')" class="my-class fa-regular fa-circle-xmark fa-2xl" style="color: #000000;"></i>
    </div>
    <div class="main">
        <div class="flex">
            <div class="subflex">

                <h1>Sign Up</h1>
                <p>Already a Member? <a href="login.php">Log In</a></p>
            </div>
            <form action="signUp.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                <p id="show"></p><a href="login.php" id="loginshow"></a>
                <button id="event">Sign Up</button>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $sql1 = "SELECT * FROM `usertable` WHERE `UserName` = '" . $_POST['email'] . "'";
        $result = mysqli_query($conn, $sql1);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
    ?>
            <script>
                document.getElementById('show').innerHTML = "Your Account is Already Created! ";
                document.getElementById('show').style.display = "Inline";
                document.getElementById('loginshow').innerHTML = "Log In";
                document.getElementById('show').style.color = "Red";
                document.querySelectorAll('input')[0].style.borderColor = "Red";
                document.querySelectorAll('input')[1].style.borderColor = "Red";
            </script>
    <?php
        } else {
            $sql2 = "INSERT INTO `usertable` (`UserName`,`UserPassword`) VALUES('" . $_POST['email'] . "','" . $_POST['password'] . "');";
            $result = mysqli_query($conn, $sql2);
            $_SESSION['UserName'] = $_POST['email'];
            echo '<script>window.open("index.php","_self")</script>';
        }
    }
    ?>

</body>

</html>