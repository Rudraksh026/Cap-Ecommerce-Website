<?php
session_start();
session_unset();
session_destroy();
unset($_SESSION['UserName']);
echo '<script>window.open("../index.php","_self");</script>';
?>