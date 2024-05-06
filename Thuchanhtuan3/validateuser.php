<?php
session_start();
$valid_username = "admin";
$valid_password = "password";

if ($_POST["username"] == $valid_username && $_POST["password"] == $valid_password) {
    // Thiết lập biến session IsLogin thành true
    $_SESSION["IsLogin"] = true;
    header("Location: dashboard.php"); // Chuyển hướng đến trang dashboard nếu đăng nhập thành công
    exit;
} else {
    // Đăng nhập không thành công, chuyển hướng trở lại trang login
    header("Location: login.html");
    exit;
}
?>
