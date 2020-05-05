<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["uname"]);
header("Location:log_in.php");
?>
