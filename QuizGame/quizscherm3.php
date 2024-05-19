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
	<div class = "text"> Met welke letter begint  <u> zon</u></b> ? </div>
	<a href ""><img class ="zon" src = "pics/zon.png"> </a>
	
	</div>
	
	<form action="quizscherm4.php" method="get" id="next">
	</form>
	
	<div id="center-div2">
		<button class="button button1" onclick="myFunction()">C</button>
		<button class="button button2" onclick="myFunction()">L</button>
		<button class="button button3" onclick="myFunction()">V</button>
		<button class="button button4" form="next" value="Submit">Z</button>
	
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
 <div class = "text1"> 3/5 </div>
</html>
