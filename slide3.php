<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="slide3.css">
    <title>Child English</title>
</head>
<body>
    <div class="container">
        
        
        <div class="main">
            <img src="img/bus.jpg" style="width:50%; display:block; margin:auto;" class="img-feature">
            
            
            <div class="control prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </div>
            <div class="control next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </div>
        </div>
        
        <div class="list-image">
            <div class="image-container">
                <img class="image" src="img/bus.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio1">Play Audio</button>
                <div class="popup">
                    <p>Bus</p>
                    <p>Xe Buýt</p>

                </div>
                
            </div>
            <audio id="audio1" src="media/bus.mp3"></audio>


            <div class="image-container">
                <img class="image" src="img/oto.png" alt="Your Image">
                <button class="audio-button" data-audio="audio2">Play Audio</button>
                <div class="popup">
                    <p>Car</p>
                    <p>Xe oto</p>

                </div>
            </div>
            <audio id="audio2" src="media/car.mp3"></audio>



            <div class="image-container">
                <img class="image" src="img/truck.png" alt="Your Image">
                <button class="audio-button" data-audio="audio3">Play Audio</button>
                <div class="popup">
                    <p>Truck</p>
                    <p>Xe tải</p>
                </div>
            </div>
            <audio id="audio3" src="media/truck.mp3"></audio>   



            <div class="image-container">
                <img class="image" src="img/motobike.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio4">Play Audio</button>
                <div class="popup">
                    <p>Cat</p>
                    <p>Con Mèo</p>

                </div>
            </div>
            <audio id="audio4" src="media/motobike.mp3"></audio>

            <div class="image-container">
                <img class="image" src="img/bycicle.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio5">Play Audio</button>
                <div class="popup">
                    <p>Bicycle</p>
                    <p>Xe đạp</p>
                </div>
            </div>
            <audio id="audio5" src="media/bycicle.mp3"></audio>




            <div class="image-container">
                <img class="image" src="img/plane.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio6">Play Audio</button>
                <div class="popup">
                    <p>Plane</p>
                    <p> Máy bay </p>
                    <span id="completedMessage" class="completed-message">Đã hoàn thành</span>
                </div>
            </div>
            <audio id="audio6" src="media/plane.mp3"></audio>
        </div>
    </div>
    <a href="index3.php"><button id="completeButton" class="complete-button" style="display: none;">Hoàn tất</button></a>
    <div class="navbar">
        <a href="user.php"><i style= font-size:100%  class="fa-solid fa-user"></i></a>
        <a href="index1.php"><i class="fas fa-briefcase"></i></a>
        <a href="Class.php"><i class="far fa-file"></i></a>
        <a href="progesslevel2.php"><i class="far fa-address-card"></i></a>
    </div>
    <a href="#" id="completeButton" class="complete-button" style="display: none;">Hoàn tất toàn bộ</a>
    <div id="completePopup" class="popup" style="display: none;">
        <p>Hoàn tất toàn bộ</p>
        <button id="completeButtonPopup">OK</button>
    </div>
    
</body>

    
<script src="slide3.js"></script>
</html>