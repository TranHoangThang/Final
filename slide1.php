<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="slide1.css">
    <title>Child English</title>
</head>
<body>
    <div class="container">
        
        
        <div class="main">
            <img src="img/img1.jpg" class="img-feature" style="width:50%;display:block; margin:auto;">
            
            
            <div class="control prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </div>
            <div class="control next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </div>
            </img>
        </div>
        
        <div class="list-image">
            <div class="image-container">
                <img class="image" src="img/img1.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio1">Play Audio</button>
                <div class="popup">
                    <p>Fox</p>
                    <p>Con Cáo</p>

                </div>
                
            </div>
            <audio id="audio1" src="media/fox.mp3"></audio>


            <div class="image-container">
                <img class="image" src="img/img2.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio2">Play Audio</button>
                <div class="popup">
                    <p>Duck</p>
                    <p>Con vịt</p>

                </div>
            </div>
            <audio id="audio2" src="media/duck.mp3"></audio>



            <div class="image-container">
                <img class="image" src="img/img3.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio3">Play Audio</button>
                <div class="popup">
                    <p>Buffalo</p>
                    <p>Con Trâu</p>
                </div>
            </div>
            <audio id="audio3" src="media/buffalo.mp3"></audio>   



            <div class="image-container">
                <img class="image" src="img/img4.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio4">Play Audio</button>
                <div class="popup">
                    <p>Cat</p>
                    <p>Con Mèo</p>

                </div>
            </div>
            <audio id="audio4" src="media/cat.mp3"></audio>

            <div class="image-container">
                <img class="image" src="img/bird.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio5">Play Audio</button>
                <div class="popup">
                    <p>Panda</p>
                    <p>Gấu Trúc</p>
                </div>
            </div>
            <audio id="audio5" src="media/bird.mp3"></audio>




            <div class="image-container">
                <img class="image" src="img/img6.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio6">Play Audio</button>
                <div class="popup">
                    <p>Dog</p>
                    <p>Con Chó</p>
                    <span id="completedMessage" class="completed-message">Đã hoàn thành</span>
                </div>
            </div>
            <audio id="audio6" src="media/dog.mp3"></audio>
        </div>
    <a href="index3.php"><button id="completeButton" class="complete-button" style="display: none;">Hoàn tất</button></a>
    </div>
    <div class="navbar">
        <a href="user.php"><i style= font-size:100%  class="fa-solid fa-user"></i></a>
        <a href="index1.php"><i class="fas fa-briefcase"></i></a>
        <a href="Class.php"><i class="far fa-file"></i></a>
        <a href="progesslevel2.php"><i class="far fa-address-card"></i></a>
    </div>
</body>
<script src="slide3.js"></script>
<script>
</script>
</html>