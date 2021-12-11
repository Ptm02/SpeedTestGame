<?php
session_start();
unset($_SESSION["UserID"]);
unset($_SESSION["Password"]);
header("Location:index.php");
?>
