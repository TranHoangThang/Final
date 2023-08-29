<?php
session_start();
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['id'])) {
    echo "Bạn chưa đăng nhập!";
    exit();
}

// Kết nối tới CSDL và các biến khác
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_singup";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

// Lấy thông tin người dùng (đã đăng nhập)
$user_id = $_SESSION['id']; // Thay đổi tùy theo cách lưu thông tin người dùng

// Lấy thông tin khóa học từ URL (Class two)
$course_id_class_two = 2; // Thay đổi theo ID của Class two trong bảng courses

// Kiểm tra xem người dùng đã hoàn thành Class two chưa
$check_query_class_two = "SELECT * FROM user_progress WHERE user_id = '$user_id' AND course_id = '$course_id_class_two'";
$check_result_class_two = mysqli_query($conn, $check_query_class_two);

if (mysqli_num_rows($check_result_class_two) == 0) {
    // Chưa có dữ liệu về việc hoàn thành Class two, thêm dữ liệu mới
    $completed_class_two = 1; // Người dùng đã hoàn thành Class two

    $insert_query_class_two = "INSERT INTO user_progress (user_id, course_id, completed) VALUES ('$user_id', '$course_id_class_two', '$completed_class_two')";
    $insert_result_class_two = mysqli_query($conn, $insert_query_class_two);

    if ($insert_result_class_two) {
        echo "<script>
                alert('Cập nhật tiến độ học tập thành công!');
                window.location.href = 'index1.php';
              </script>";
    } else {
        echo "Có lỗi xảy ra khi cập nhật tiến độ học tập: " . mysqli_error($conn);
    }
} else {
    echo "<script>
            alert('Bạn đã hoàn thành lớp học này rồi!');
            window.location.href = 'index1.php';
          </script>";
}

// Đóng kết nối
mysqli_close($conn);
?>
