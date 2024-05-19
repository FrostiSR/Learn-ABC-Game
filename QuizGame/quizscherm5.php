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
	<div class = "text"> Met welke letter begint  <u> taart</u></b> ? </div>
	<a href ""><img class ="taart" src = "pics/taart.png"> </a>
	
	</div>
	
	<form action="diplomascherm.php" method="get" id="next">
	</form>
	
	<div id="center-div2">
		<button class="button button1" onclick="myFunction()">G</button>
		<button class="button button2" onclick="myFunction()">I</button>
		<button class="button button3" form="next" value="Submit">T</button>
		<button class="button button4" onclick="myFunction()">X</button>
	
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
 <div class = "text1"> 5/5 </div>
</html>
