<?php
session_start();

#admin log out
unset($_SESSION['admin']);
session_destroy();
header("refresh:0.1;url=login.php");
?>
