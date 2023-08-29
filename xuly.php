<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: user.php");
    exit();
}

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "database.php";
    
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row["password"])) {
                $_SESSION["user"] = $row["username"];
                $_SESSION["id"] = $row["id"];
                header("Location: user.php");
                exit();
            } else {
                $login_error = "Mật khẩu không đúng.";
            }
        } else {
            $login_error = "Tài khoản không tồn tại.";
        }
    } else {
        die("Có lỗi xảy ra.");
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?> 





