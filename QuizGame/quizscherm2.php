<!doctype html>
<html>
  <head>
    <title> ABCWorld - Quiz </title>
    <link href ="css/stylesheet_quiz.css" rel ="stylesheet" />
	<script type="text/javascript" src="jfunc.js"></script>
  </head>
  <body>

   <style type="text/css">
   #save_feedback {
   display:none
   }
   </style>
  
	<div id="center-div"> 
	<div class = "text"> Met welke letter begint  <u> fiets</u></b> ? </div>
	<a href ""><img class ="fiets" src = "pics/fiets.png"> </a>
	
	</div>
	
	<form action="quizscherm3.php" method="get" id="next">
	</form>
	
	<div id="center-div2">
		<button class="button button1" onclick="myFunction()">B</button>
		<button class="button button2" onclick="myFunction()">E</button>
		<button class="button button3" form="next" value="Submit">F</button>
		<button class="button button4" onclick="myFunction()">R</button>
	
	<div id="popup" onclick="myFunction()">
	<span class="popuptext" id="MyPopup">Incorrect antwoord!</span>
	</div>
	
	</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var button1 = document.getElementById("MyPopup");
    button1.classList.toggle("show");
	
}
var strCmd = "document.getElementById('MyPopup').style.display = 'none'";
var waitseconds = 5;

// Calculate time out period then execute the command
var timeOutPeriod = waitseconds * 1000;
var hideTimer = setTimeout( timeOutPeriod);
	

</script>
 </body>
 <div class = "text1"> 2/5 </div>
</html>
