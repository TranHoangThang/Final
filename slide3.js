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