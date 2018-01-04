<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();
// set the expiration date to one hour ago and delete the cookie
header("location: LOGIN_.php");
?>
