<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
    <link rel="stylesheet" type="text/css" href="Class.css">
    <style>
        *{ 
            height: 100%;
            margin: 0;
            padding: 0;
        }   
    </style>
</head>
<body>
    <div class="Class">
        <div class="Quizzes" style="background-color: aqua">
            <div class="Picture_Quizzes">
                <h1>Picture Quizzes<br>
                <a class="button" href="quiz1a.php">Start Quiz</a></h1>
                <a class="button2" href="user.php" style="display: inline; font-size: 40px; 
                font-family: 'Rocher'; font-palette: --blue; text-decoration: none; position: absolute; top: 75%; left: 35%;">Back Home</a></h1>
            </div>
        </div>

        <div class="Quizzes" style="background-color: springgreen">
            <div class="Yes_No_Quizzes">
                <h1>Yes/No Quizzes<br>
                <a class="button" href="quiz2a.php">Start Quiz</a></h1>
                <a class="button2" href="user.php" style="display: inline; font-size: 40px; 
                font-family: 'Rocher'; font-palette: --green; text-decoration: none; position: absolute; top: 75%; left: 35%;">Back Home</a></h1>
            </div>
        </div>

        <div class="Quizzes" style="background-color: #ee8c8d">
            <div class="Sounds_Quizzes">
                <h1>Sounds Quizzes<br>
                <a class="button" href="quiz3a.php">Start Quiz</a></h1>
                <a class="button2" href="user.php" style="display: inline; font-size: 40px; 
                font-family: 'Rocher'; font-palette: --Pink; text-decoration: none; position: absolute; top: 75%; left: 35%;">Back Home</a></h1>
            </div>
        </div>
        
        <div class="Quizzes" style="background-color: #be87e5">
            <div class="Trivia_Quizzes">
                <h1>Trivia Quizzes<br>
                <a class="button" href="quiz4a.php">Start Quiz</a></h1>
                <a class="button2" href="user.php" style="display: inline; font-size: 40px; 
                font-family: 'Rocher'; font-palette: --orange; text-decoration: none; position: absolute; top: 75%; left: 35%;">Back Home</a></h1>
            </div>
        </div>
    </div>
    
    <audio id="myAudio" src="Audio/simp.mp4" loop="true" autoplay="true" controls style="display: none;"></audio>
    <input type="range" id="volumeRange" min="0" max="1" step="0.01" value="0.5" onchange="changeVolume(this.value)" style="display: none;">
    <script>
        var audioElement = document.getElementById("myAudio");
        var volumeRange = document.getElementById("volumeRange");

        // Load volume from local storage
        function loadVolume() {
            var savedVolume = localStorage.getItem("audioVolume");
            if (savedVolume !== null) {
                audioElement.volume = savedVolume;
                volumeRange.value = savedVolume;
            }
        }

        function changeVolume(volume) {
            if (audioElement) {
                audioElement.volume = volume;
                // Save volume to local storage
                localStorage.setItem("audioVolume", volume);
            }
        }

        window.onload = function() {
            loadVolume();
        };
    </script>
</body>
</html>