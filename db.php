<?php
$localhost = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "cyber_db";

$conn=mysqli_connect($localhost,$DB_USERNAME,$DB_PASSWORD,$DB_NAME,)or die($mysqli_error());
$db_select=mysqli_select_db($conn,$DB_NAME)or die($mysqli_error());
echo "Data successfully saved";
?>