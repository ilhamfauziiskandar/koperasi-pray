<?php
session_start();
session_destroy();

$_SESSION['alert'] = "sukses";
$_SESSION['isialert'] = "Anda telah LOGOUT";
header("location:login.php");

?>