<?php
session_start();
session_unset($_SESSION['uname']);
session_unset($_SESSION['role']);
session_destroy();
header('Location:index.php');
?>