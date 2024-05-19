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
			<a href "quiz5.php">


<a href= "#" onmousedown="bleep.play()"><img src = "ananas.png" class= "button13"></a>
<a href= "diplomascherm.php" onmousedown="bleep2.play()"><img src = "tomaat.png" class= "button14"></a>
<a href= "#" onmousedown="bleep.play()"><img src = "zuurzak.png" class= "button15"></a>

<h1>Kies de vrucht die met de letter <b><u> t</u></b> begint.</h1>

<a href= "quiz4.php" class= "previous">&laquo; </a>

<h2>5/5</h2>

</div>


</body>
