<?php 
//sesession_start();

session_start();
session_unset();
session_destroy();

header('Location: 3.php');
?>