<?php
session_start();
$dbservername = process.env.MYSQL_ADDON_HOST;
$dbusername = process.env.MYSQL_ADDON_USER;
$dbpassword = MYSQL_ADDON_PASSWORD;
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>
