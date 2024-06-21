<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: ../../index.php");
// Redirect to home page after logout
exit;