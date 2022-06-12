<?php
session_start();
unset($_SESSION['admin']);
unset($_SESSION['worker']);
unset($_SESSION['student']);
header("Location: index.php"); 
?>