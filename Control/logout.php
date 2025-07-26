<?php
session_start(); // Bắt đầu session

// Hủy tất cả các biến session
$_SESSION = array();

// Hủy session
session_destroy();

// Chuyển hướng về trang đăng nhập hoặc trang chủ
header("Location: ../View/dangnhap.php"); // Sửa đường dẫn nếu cần
exit;
?>