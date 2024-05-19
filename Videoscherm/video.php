<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="1140.css"/>
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
  </div>
</nav>


<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
  background-image: url("vid.jpg");
  background-size: cover;
  background-repeat: no-repeat;


}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.vid-border{
  position: relative;
  box-shadow: 1px 1px 10px 5px;
  overflow: hidden;
}
</style>
<body>

<p style="text-align:center;"></p>

<table width="100%">
<tr>
<td align="left" valign="top" width="50%">
  <video width="320" height="240" controls iframe class="vid-border">
   <source id= "video1" src="vid1.mp4" type="video/mp4" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
</td>
<td align="left" valign="top" width="50%">
  <video width="320" height="240" controls iframe class="vid-border">
   <source src="vid2.mp4" type="video/mp4" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
</td>
<td align="left" valign="top" widt="50%">
  <video width="320" height="240" controls iframe class="vid-border">
 <source src="vid3.mp4" type="video/mp4" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
</td>
</tr>

<tr>
  <td align="margin-bottom" valign="margin-bottom" width="50%">
    <video width="320" height="240" controls iframe class="vid-border">
    <source src="vid4.mp4" type="video/mp4" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </td>

 <td align="margin-bottom" valign="margin-bottom" width="50%">
   <video width="320" height="240" controls iframe class="vid-border">
   <source src="vid5.mp4" type="video/mp4" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
</td>

  <td align="margin-bottom" valign="margin-bottom" width="50%">
    <video width="320" height="240" controls iframe class="vid-border">
    <source src="vid6.mp4" type="video/mp4" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
   </td>

</tr>

</table>
</body>
</html>
