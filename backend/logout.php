<?php
// initialize session
session_start();
 
// destroy the session.
session_destroy();
 
// redirect to login page
header("Location: ../index.html");
exit;
?>