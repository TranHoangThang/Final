<?php
    session_start();

    // Kết nối tới CSDL
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "login_singup";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong;");
    }

    // Lấy thông tin người dùng (đã đăng nhập)
    $user_id = $_SESSION['id'];

    // Truy vấn cơ sở dữ liệu để lấy thông tin tiến trình học tập của người dùng
    $query = "SELECT COUNT(*) as completed_courses FROM user_progress WHERE user_id = '$user_id' AND completed = 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $completed_courses = $row['completed_courses'];
    } else {
        $completed_courses = 0;
    }

    // Tính toán phần trăm tiến trình học tập
    $total_courses = 2; // Tổng số khóa học
    $progress_percent = ($completed_courses / $total_courses) * 100;

    // Đóng kết nối
    mysqli_close($conn);
?>
<?php

    // Kết nối tới CSDL
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "login_singup";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong;");
    }

    // Lấy thông tin người dùng (đã đăng nhập)
    $user_id = $_SESSION['id'];

    // Truy vấn cơ sở dữ liệu để lấy thông tin tiến trình hoàn thành của người dùng
    $query = "SELECT COUNT(*) as completed_quizzes FROM user_quiz_progress WHERE user_id = '$user_id' AND completed = 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $completed_quizzes = $row['completed_quizzes'];
    } else {
        $completed_quizzes = 0;
    }

    // Tính toán phần trăm tiến trình hoàn thành
    $total_quizzes = 4; // Tổng số bài kiểm tra
    $custom_progress = ($completed_quizzes / $total_quizzes) * 100;

    // Đóng kết nối
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <met#aeb3b8et="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="progresslevel2.css" rel="stylesheet">
        <style>
            .tientrinhbar1 {
                display: flex;
                flex-direction: row;
                justify-content: center;
                overflow: hidden;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                transition: width 1.2s ease;
                width: <?php echo $progress_percent; ?>%;
            }
            .tientrinhbar2 {
                display: flex;
                flex-direction: row;
                justify-content: center;
                overflow: hidden;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                transition: width 1.2s ease;
                width: <?php echo $custom_progress; ?>%;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">

                <div class="giua">
                    
                    <section class="kinang wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title kinang2" style="color:#b8df10;">Tiến trình</h1>
                            <div class="kinang3" style="width: 100%; font-weight: bold;">
                                <div class="kinang4">
                                    <div class="tientrinh" style="margin-bottom: 10px;">
                                        <p class="kinang5">Your Learning Completion Progress</p>
                                        <p class="kinang5"><?php echo $progress_percent; ?>%</p>
                                    </div>
                                    <div class="tientrinh2">
                                        <div class="tientrinhbar1 class-one" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="kinang4">
                                    <div class="tientrinh" style="margin-bottom: 10px;">
                                        <p class="kinang5">Your Quizzes Completion Progress</p>
                                        <p class="kinang5"><?php echo $custom_progress; ?>%</p>
                                    </div>
                                    <div class="tientrinh2">
                                        <div class="tientrinhbar2 class-two" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                    </section>

                    <section class="kinang wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title kinang2" style="color:#b8df10;">Giải trí</h1>
                        <div>
                            <p style="font-size: 20px; padding-bottom: 30px;">Sau 1 khoản thời gian học hành chăm chỉ, mà học cũng đi đôi với hành, khi các trẻ nhỏ đã hoàn thành xong các bài học cũng như các bài kiểm tra, chúng tôi đã làm ra 1 trò chơi xếp hình như sau để giúp các em khuây khỏa đầu óc. </p>
                            <div id="board">
                            </div>
                            <h1 style="text-align: center; padding-top: 40px;">Turns: <span id="turns">0</span></h1>
                        </div>
                    </section>

                    <section class="kinang wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title kinang2" style="color:#b8df10;">Lời cảm ơn chân thành</h1>
                        <div>
                            <p style="font-size: 20px;">Chúng tôi xin gửi lời cảm ơn chân thành nhất đến với các anh, chị và các cháu nhỏ đã đồng hành cùng trang web này tới tận bây giờ. Chúng tôi sẽ cố gắng trau dồi thêm kĩ năng làm website để cho mọi người 1 sự trải nghiệm thú vị hơn, hài lòng hơn và có sự bổ ích hơn. Hẹn gặp lại mọi người!</p>
                        </div>
                    </section>

                </div>

                <div class="sticky cao trai">
                    <div class="avatar">
                        <img class="anh" src="phuanh/user.png" alt="Image">
                        <a href="logout.php" class="logout-button" id="lol">LogOut</a>
                        <h1 class="name">Xin chào <span> <?php echo $_SESSION["user"]; ?></span>!!!!</h1>
                        <div style="height: 22px;">
                            <h4 class="auto-type"></h4>
                            <div class="auto-type2">Chào mừng bạn đến với website của chúng tôi</div>
                        </div>
                        <nav id="navbar" class="anh3">
                            <a href="user.php"><i style= font-size:100%  class="fa-solid fa-user"></i></a>
                            <a href="index1.php"><i class="fas fa-briefcase"></i></a>
                            <a href="Class.php"><i class="far fa-file"></i></a>
                            <a href="progesslevel2.php"><i class="far fa-address-card"></i></a>
                          </nav>
                    </div>
                </div>

            </div>
        </div>

        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="progresslevel2.js"></script>
        <script src="https://kit.fontawesome.com/6881fbc8f6.js" crossorigin="anonymous"></script>
    </body>
</html>