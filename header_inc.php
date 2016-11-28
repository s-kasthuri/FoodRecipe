<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
TheKitchn
   </title>
<meta name="viewport" content="width=device-width, intial-scale=1" />
<link rel="stylesheet" href="http://www.google.com" />

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=f1f99ea7-1a14-407b-aa5b-5f6f8436683a"></script>
<script type="text/javascript">stLight.options({publisher: "f1f99ea7-1a14-407b-aa5b-5f6f8436683a", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<script>
 function goToPage(url)
 {
 if (url != "")
 {
   open(url);
 }
 }
</script>




<style>
.myslides {display:none;}
</style>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index:80;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
<style>
* {box-sizing:border-box}

.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade{
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size (changes according to the screen size)*/
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.verdana {
	font-family: Verdana, Geneva, sans-serif;
}
.lucida {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>

<style>
    .logo{
        margin: 0px auto;
        padding-left: 120px; /* the space between the start of your logo and your text */
        padding-top: 30px; /* the vertical space between the top and your text, to center the logo*/
        display: block; /* very important since normally anchors are inline */
        background: url(images/logo.png) top left no-repeat; /* obviously :) */
    }
</style>

<style>

footer {
    padding: 4em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
</style>

<style>



img{
	alignment-adjust:"center";
}

.center {
    margin: auto;
    width: 60%;
    border: 3px solid #F90;
    padding: 10px;
}

body
{
	height: 100%;
}
.wrapper
 {
min-height: 100%;
height: auto !important;
height: 100%;
margin: 0 auto -4em;
}
.footer, .push 
{
height: 4em;
}
	
	
</style>




</head>

<body bgcolor="#FFFFFF">


  
<center><img src="images/lll.png" width="235" height="214" alt=""/></center>

<!-----------------  NAVIGATION BAR BUTTON AND DROPDOWN RECIPES -------------->
<ul>
  <li><a class="active" href="index.php">HOME</a></li>
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn" onclick="myFunction(this)">CUISINES</a>
       <div class="dropdown-content myDropdown">
    	<a href="AsamPedas.php">Asam Pedas </a>
        <a href="Rendang Ayam.php">Rendang Ayam </a>
        <a href="satay.php">Satay</a>
        <a href="nasiLemak.php">Nasi Lemak</a>
        
        <a href="ChineseFriedRice.php">Chinese Fried Rice</a>
        <a href="chowMein.php">Chow Mein</a>
        <a href="Potstickers.php">Potstickers</a>
        <a href="SourPorkSoup.php">Sour Pork Soup (Non-Halal)</a>
        
        <a href="indianButterChicken.php">Indian Butter Chicken</a>
        <a href="tomatoRice.php">Tomato Rice</a>
        <a href="spicySoup.php">Spicy Soup (Rasam)</a>
        <a href="FishTikka.php">Fish Tikka</a>
    </div>
  </li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" onclick="myFunction(this)">FESTIVAL RECEPIS</a>
    <div class="dropdown-content myDropdown">
      <a href="RAYA-ketupat.php">Hari Raya Special</a>
      <a href="DEEVALI-mutton briyani.php">Deepavali Special</a>
      <a href="CHINESENY-fish.php">Chinese New Year Special</a>
    </div>
  </li>
  
  
    <a href="about us.php" class="dropbtn" onclick="myFunction(this)" align="right">ABOUT US</a>
   
      
      
    </div>
  </li>


<?php

if (isset($_SESSION["login_user"])) {
	?><li style="float:right"><a  class="active" href = "logout.php">Log Out</a></li><?php
} else {
	?><li style="float:right"><a  class="active" href = "login.php">Log In</a></li><?php
	}
    
	
	
	
	?>
    
</ul>