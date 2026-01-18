<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    $q = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $row = mysqli_fetch_assoc($q);

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['user_id'];
        header("Location: complaint.html");
        exit();
    } else {
        echo "Invalid Login";
    }
}
?>
