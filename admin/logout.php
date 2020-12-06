<?php 
session_start();
session_destroy();
header('Location: login.php'); //redirects to login page after logout...