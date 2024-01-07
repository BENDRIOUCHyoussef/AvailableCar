<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Expire the session cookie
setcookie(session_name(), '', time() - 3600, '/');

// Redirect to the login page after logout
header("Location: loginOwner.php");
exit();
?>
