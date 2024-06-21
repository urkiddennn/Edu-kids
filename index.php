<?php
session_start();

$authenticated =  false;

if(isset($_SESSION["email"])){
  $authenticated = true;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="x-icon" href="src/images/logo.png" />
    <link rel="stylesheet" href="src/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="src/js/main/register.js" defer></script>

    <title>Edu-Kids</title>
</head>

<body>
    <header>
        <ul>
            <li>
                <p>Know more about us?</p>
            </li>
            <li><a href="" class="head-btn" onclick="showInfo()">About us</a></li>
            <li><a href="" class="head-btn" onclick="showInfo()"> More info</a></li>
        </ul>
    </header>
    <div class="content">
        <div class="navbar">
            <div class="logo-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z" />
                </svg>
                <p id="clk" onclick="
showGames()">Play</p>
            </div>
            <div class="logo-icon2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                </svg>
                <p id="clk" onclick="showVideos()">Videos</p>
            </div>
            <div class="logo-icon3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                </svg>
                <p id="clk" onclick="showAccount()">Account</p>
            </div>
            <div class="logo-icon4" id="Information">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                </svg>
                <p id="clk" onclick="showInfo()">Info</p>
            </div>
        </div>
        <div class="login">
            <h1>sadssdsad</h1>
        </div>
        <img src="src/images/logo.png" alt="" class="logo" />
        <div class="mask-icon-cont"></div>
        <img src="src/images/clouds.png" alt="" class="clouds" />
        <img src="src/images/clouds.png" alt="" class="clouds2" />
        <img src="src/images/clouds.png" alt="" class="clouds3" />
        <img src="src/images/clouds.png" alt="" class="clouds4" />
        <img src="src/images/clouds.png" alt="" class="clouds5" />
        <div class="oval"></div>
        <img src="src/images/kids-playing.png" alt="" class="kids" />
        <img src="src/images/tree-1.png" alt="" class="tree" />
        <img src="src/images/tree-2.png" alt="" class="tree2" />
        <img src="src/images/tree-1.png" alt="" class="tree3" />
    </div>



    <?php
    if(!$authenticated){
    
    ?>


    <?php
    include "src/pages/login.php";
    ?>

    <?php
    include "src/pages/signup.php";
    ?>
    <?php
    }else{
    ?>
    <div class="games" id="games" style="display: none">
        <ul>
            <li>
                <div class="game-card1"></div>
            </li>
            <li>
                <div class="game-card2"></div>
            </li>
            <li>
                <div class="game-card3"></div>
            </li>
        </ul>
    </div>

    <div class="video-list" id="videos">
        <ul>
            <li>
                <div class="video-card">
                    <iframe width="718" height="404" src="https://www.youtube.com/embed/S84fcGdEULk"
                        title="Counting Up To 20 | Count Along With The Roundabouts! | Super Simple Songs"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </li>
            <li>
                <div class="video-card">
                    <iframe width="718" height="404" src="https://www.youtube.com/embed/kDdg2M1_EuE"
                        title="The Alphabet Is So Much Fun | Kids Songs | Super Simple Songs" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </li>
            <li>
                <div class="video-card">
                    <iframe width="718" height="404" src="https://www.youtube.com/embed/v-BvRlsbUiU"
                        title="Red Yellow Green Blue | + More Kids Songs | Super Simple Songs" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </li>
        </ul>
    </div>
    <div class="info" id="info">
        <div class="info-content">
            <p>alyssabcustodio@gmail.com
            </p>
            <p>Mobile NO: 09467992893</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
            </svg>
        </div>
    </div>
    <div class="logout" id="logout" style="display: none;">
        <form action="src/pages/logout.php" method="POST">
            <h1>Logout?</h1>
            <button type="submit">Logout</button>
        </form>
    </div>

    <?php
    }
    ?>
    <footer>
        <p>Edu kids @alright reserved TAC's privac.policy cookie.policy</p>
    </footer>
</body>
<script>
const videoCon = document.getElementById("videos");
const inforamtionCon = document.getElementById("info");
const gamesContainer = document.getElementById("games");
const logoutContainer = document.getElementById("logout");

function hideAllContainers() {
    gamesContainer.style.display = "none";
    videoCon.style.display = "none";
    inforamtionCon.style.display = "none";
    logoutContainer.style.display = "none";
}

function showGames() {
    hideAllContainers();
    gamesContainer.style.display = "flex";
}

function showVideos() {
    hideAllContainers();
    videoCon.style.display = "flex";
}

function showAccount() {
    hideAllContainers();
    logoutContainer.style.display = "flex";
}

function showInfo() {
    hideAllContainers();
    inforamtionCon.style.display = "flex";
}
</script>


</html>