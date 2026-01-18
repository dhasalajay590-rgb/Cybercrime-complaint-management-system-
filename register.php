<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile'] ?? '');
    $password = $_POST['password'] ?? '';

    $pass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$pass')";

    if (mysqli_query($conn, $sql)) {
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
