<!DOCTYPE html>
<html>
<head>
    <title>Hiển thị văn bản trên hình</title>
    <style>
        .container {
            position: relative; /* Để phần tử con có vị trí tương đối */
            display: inline-block; /* Hiển thị ảnh và nút cùng hàng */
        }
        
        .image {
            display: block; /* Đảm bảo ảnh được hiển thị là một khối */
            max-width: 100%; /* Đảm bảo ảnh không vượt quá chiều rộng của phần tử cha */
        }
        
        .text-overlay {
            position: absolute; /* Vị trí tuyệt đối để chồng lên ảnh */
            top: 0; /* Đặt vị trí từ trên xuống 0 */
            left: 0; /* Đặt vị trí từ trái sang 0 */
            width: 100%; /* Đặt chiều rộng bằng 100% để che phủ toàn bộ ảnh */
            height: 100%; /* Đặt chiều cao bằng 100% để che phủ toàn bộ ảnh */
            background-color: rgba(255, 255, 255, 0.7); /* Đặt màu nền cho văn bản */
            display: none; /* Ẩn ban đầu */
            justify-content: center; /* Căn giữa theo chiều dọc */
            align-items: center; /* Căn giữa theo chiều ngang */
            text-align: center; /* Căn giữa văn bản trong phần tử */
            transition: display 0.3s ease; /* Hiệu ứng chuyển đổi hiển thị */
        }
        
        .container:hover .text-overlay {
            display: flex; /* Hiển thị khi con trỏ chuột đè lên phần tử cha */
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="image" src="img1.jpg" alt="Ảnh mô tả">
        <div class="text-overlay">
            <p>Đây là văn bản hiển thị trên hình.</p>
        </div>
    </div>
</body>
</html>
