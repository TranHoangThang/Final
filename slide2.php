<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="slide2.css">
    <title>Child English</title>
    <script>
        function setCompleted() {
            localStorage.setItem('completed_class_one', 'true');
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="main">
            <img src="img/apple.jpg" style="width:50%; display:block; margin:auto;"class="img-feature">
            <div class="control prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </div>
            <div class="control next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </div>
        </div>
        <div class="list-image">
            <div class="image-container">
                <img class="image" src="img/apple.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio1">Play Audio</button>
                <div class="popup">
                    <p>Apple</p>
                    <p>Quả táo</p>
                </div>
            </div>
            <audio id="audio1" src="media/apple.mp3"></audio>


            <div class="image-container">
                <img class="image" src="img/banana.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio2">Play Audio</button>
                <div class="popup">
                    <p>Banana</p>
                    <p>Quả chuối</p>
                </div>
            </div>
            <audio id="audio2" src="media/banana.mp3"></audio>



            <div class="image-container">
                <img class="image" src="img/orange.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio3">Play Audio</button>
                <div class="popup">
                    <p>Orange</p>
                    <p>Quả cam</p>
                </div>
            </div>
            <audio id="audio3" src="media/orange.mp3"></audio>



            <div class="image-container">
                <img class="image" src="img/watermelon.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio4">Play Audio</button>
                <div class="popup">
                    <p>Watermelon</p>
                    <p>Dưa hấu</p>
                </div>
            </div>
            <audio id="audio4" src="media/watermelon.mp3"></audio>

            <div class="image-container">
                <img class="image" src="img/coconut.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio5">Play Audio</button>
                <div class="popup">
                    <p>Coconut</p>
                    <p>Quả dừa</p>
                </div>
            </div>
            <audio id="audio5" src="media/coconut.mp3"></audio>




            <div class="image-container">
                <img class="image" src="img/guava fruit.jpg" alt="Your Image">
                <button class="audio-button" data-audio="audio6">Play Audio</button>
                <div class="popup">
                    <p>guava fruit</p>
                    <p>Quả ổi</p>
                </div>
            </div>
            <audio id="audio6" src="media/guava fruit.mp3"></audio>
        </div>
    </div>
    <a href="index1.php?completed=true"><button id="completeButton" class="complete-button" onclick=setCompleted(); style="display: none;">Hoàn tất</button></a>
    <div class="navbar">
        <a href="user.php"><i style= font-size:100%  class="fa-solid fa-user"></i></a>
        <a href="index1.php"><i class="fas fa-briefcase"></i></a>
        <a href="Class.php"><i class="far fa-file"></i></a>
        <a href="progesslevel2.php"><i class="far fa-address-card"></i></a>
    </div>


</body>

    
<script>
        var imgFeature = document.querySelector('.img-feature')
        var listImg = document.querySelectorAll('.list-image img')
        var prevBtn = document.querySelector('.prev')
        var nextBtn = document.querySelector('.next')
        var playButton = document.getElementById('playButton');
        var audioPlayer = document.getElementById('audioPlayer');

        var currentIndex=0;
        function updateImageByIndex(index) {
            //remove active class

            document.querySelectorAll('.list-image div').forEach(item=>{
                item.classList.remove('active')
            })
            currentIndex= index
            imgFeature.src = listImg[index].getAttribute('src')
            listImg[index].parentElement.classList.add('active')
        }


        listImg.forEach((imgElement, index)=>{


            imgElement.addEventListener('click', e=>{

                imgFeature.style.opacity='0'
                updateImageByIndex(index)
                setTimeout(()=>{
                    imgFeature.style.opacity='1'
                },300)
            })
        })

        prevBtn.addEventListener('click', e=>{


            if(currentIndex==0) {
                currentIndex = listImg.length -1
            }else{
                currentIndex--
            }

            updateImageByIndex(currentIndex)
            imgFeature.style.animation=''
            setTimeout(()=>{
                imgFeature.style.animation='slideLeft 1s ease-in-out forwards'
            } ,200)
        })

        nextBtn.addEventListener('click', e=>{
            if(currentIndex== listImg.length-1) {
                currentIndex = 0
            }else{
                currentIndex++
            }
            updateImageByIndex(currentIndex)
            imgFeature.style.animation=''
            setTimeout(()=>{
                imgFeature.style.animation='slideRight 1s ease-in-out forwards'
            } ,200)
        })
        updateImageByIndex(0)



        const audioButtons = document.querySelectorAll('.audio-button');
            audioButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const audioId = this.getAttribute('data-audio');
                    playAudio(audioId);
                });
            });

        function playAudio(audioId) {
                const audio = document.getElementById(audioId);
                audio.play();
                audio.addEventListener('ended', function () {
                    // Tìm audio kế tiếp trong danh sách audioButtons
                    const nextAudioButton = document.querySelector(`[data-audio="${audioId}"]`).nextElementSibling;
                    if (nextAudioButton) {
                        const nextAudioId = nextAudioButton.getAttribute('data-audio');
                        playAudio(nextAudioId); // Chuyển sang âm thanh kế tiếp
                    }
                });
            }


            const imageContainers = document.querySelectorAll('.image-container');
            const completeButton = document.getElementById('completeButton');
            
            let clickedCount = 0;
            
            function handleImageClick(audioId) {
                const audio = document.getElementById(audioId);
                audio.play();
            }
            
            imageContainers.forEach(container => {
                container.addEventListener('click', () => {
                    clickedCount++;
                    const audioId = container.querySelector('.audio-button').getAttribute('data-audio');
                    handleImageClick(audioId);
                    
                    // Kiểm tra nếu người dùng đã xem xong tất cả các hình ảnh
                    if (clickedCount === imageContainers.length) {
                        completeButton.style.display = 'block';
                    }
                });
            });
</script>
</html>