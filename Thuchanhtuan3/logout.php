<?php
session_start();

// Reset trạng thái đăng nhập về false
$_SESSION["IsLogin"] = false;

// Chuyển hướng về trang login sau khi logout
header("Location: login.html");
exit;
?>
