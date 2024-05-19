<!doctype html>
<html>
  <head>
    <title> ABCWorld - Leren </title>
    <link href ="css/style_alfabet.css" rel ="stylesheet" />
  </head>
  <body>

    <div class="container-alfabet">

      <div class="button_container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>
      <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <a href="../Start scherm/startscherm.php">
              <div class ="nav-button">
                <img class ="bttn" src = "imgs/home-btn.png">
                <p class = "btn-text"> Home </p>
              </div>
            </a>
        </nav>
      </div>

      <div id = "sun"></div>

      <div id ="audio">
        <audio autoplay hidden>
          <source src="audio/m.mp3" type="audio/ogg">
        </audio>
        <audio autoplay hidden loop>
          <source src="audio/audio-bg1.mp3" type="audio/ogg">
        </audio>
      </div>

      <div class = "btn-container">
        <a id = "btn_Previous" href = "alfabet-l.php"><img src="imgs/previous.png"</i></a>
      	<a id = "btn_Next" href = "alfabet-n.php"><img src="imgs/next.png"</i></a>
      </div>

      <div id ="container-letter">
        <img class ="letter_A" src="imgs/letter_M-01.png">
        <h1 class = "letter_Word"> Muis </h1>
      </div>

    </div>

    <!--<script src="jquery-3.3.1.js"></script> -->
    <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.3.1.js"><\/script>');</script>
    <script src="js/script_alfabet.js"></script>

  </body>
</html>
