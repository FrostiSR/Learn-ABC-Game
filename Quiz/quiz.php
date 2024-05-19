<head>
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="1140.css"/>

<style>

h1 {
	position: absolute;
	top: 550px;
	left: 300px;
}

h2 {
	position: absolute;
	top: 650px;
	left: 750px;
}

</style>

<script>
var bleep = new Audio();
bleep.src = "false.mp3";

var bleep2 = new Audio();
bleep2.src = "true.mp3";
</script>

</head>

  <div id="menuToggle">

    <input type="checkbox" />

    <span></span>
    <span></span>
    <span></span>

    <ul id="menu">
			<a href="../Start scherm/startscherm.php">
	      <button href="../Start scherm/startscherm.php" class="info_Button" name="Click" type="submit" >
	      <img class ="bttn" src = "home-btn.png">
	    </button>
	    </a>
    </ul>
  </div>

	<body>

		<div id ="audio">
			<audio autoplay hidden loop>
				<source src="audio-bg.mp3" type="audio/ogg">
			</audio>
		</div>

		<div class="form">
			<a href "quiz.php">

<button class= "btn_instruction" style="font-size:24px"><i class="fa-fa-bars"></i></button>

<a href= "quiz2.php" onmousedown="bleep2.play()"><img src ="appel.png" class= "button1"></a>
<a href= "#" onmousedown="bleep.play()"><img src ="kokosnoot.png" class= "button2"></a>
<a href= "#" onmousedown="bleep.play()"><img src = "watermeloen.png" class= "button3"></a>



<h1>Kies de vrucht die met de letter <b><u> a</u></b> begint.</h1>

		<h2>1/5</h2>
		<a href= "quiz2.php" class= "next1">&raquo; </a>

</div>

	</body>
