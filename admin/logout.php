<?php
session_start();
unset ($_SESSION['id_admin']);
unset ($_SESSION['username']);
unset ($_SESSION['password']);
session_unset();
session_destroy();
header("location:../index.php");
?>
