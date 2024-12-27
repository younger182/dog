<?php
session_start();
session_destroy(); // Destroy the session
header("Location: ../Html file/login.php"); // Redirect to the homepage
exit;
?>
