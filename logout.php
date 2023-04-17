<?php
session_start(); // Start the session

// Unset or destroy the session variables
session_destroy();
header('location:login.php'); // Change 'login.php' to the desired page
exit;
?>