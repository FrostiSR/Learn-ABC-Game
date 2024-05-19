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
			<a href "quiz3.php">

<a href= "quiz4.php" onmousedown="bleep2.play()"><img src = "banaan.png" class= "button7"></a>
<a href= "#" onmousedown="bleep.play()"><img src = "cashew.png" class= "button8"></a>
<a href= "#" onmousedown="bleep.play()"><img src = "advocaad.png" class= "button9"></a>

<h1>Kies de vrucht die met de letter <b><u> b</u></b> begint.</h1>

<a href= "quiz2.php" class= "previous">&laquo; </a>
<h2>3/5</h2>
<a href= "quiz4.php" class= "next">&raquo; </a>

</div>

</body>
