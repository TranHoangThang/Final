<?php
session_start();

// Xóa tất cả các biến phiên làm việc
$_SESSION = array();

// Xóa cookie của phiên làm việc
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hủy phiên làm việc
session_destroy();

// Chuyển hướng người dùng về trang chính (Intro.php)
header("Location: index.html");
exit();
?>
