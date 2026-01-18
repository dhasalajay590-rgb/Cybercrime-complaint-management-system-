<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: thanks.html");
    exit();
}

if (isset($_POST['submit'])) {

    $user_id = $_SESSION['user_id'];
    $title   = $_POST['title'];
    $details = $_POST['details'];

    $sql = "INSERT INTO complaints (user_id, title, details)
            VALUES ('$user_id', '$title', '$details')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Complaint Submitted Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
