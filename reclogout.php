<?php
session_start();
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['pass']);
header("Location:recieverlogin.php");
?>