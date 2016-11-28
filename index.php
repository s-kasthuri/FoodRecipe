<?php
include("header_inc.php");
?>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <center><img src="images/food1_.jpg" style="width:80%"></center>
  
</div>

<div class="mySlides fade">
  
  <center><img src="images/food2.jpg" style="width:80%"></center>

</div>

<div class="mySlides fade">
  
  <center><img src="images/food3_.jpg" style="width:80%"></center>
  
</div>

<div class="mySlides fade">
  
  <center><img src="images/food4_.jpg" style="width:80%"></center>
  
</div>

<div class="mySlides fade">
  
  <center><img src="images/food5_.jpg" style="width:80%"></center>
  
</div>

<div class="mySlides fade">
  
  <center><img src="images/food6_.jpg" style="width:80%"></center>
  
</div>

<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Changes image every 3 seconds
}
</script>
<p>&nbsp;</p>
<table width="823" height="600" border="1" align="center">
<tr>
  <th width="407" height="600" align="center" valign="top"  nowrap="nowrap"><table width="821" height="600" border="1" align="center">
    <tr>
      <th width="400" height="720" valign="top" nowrap="nowrap"><p><font color="orange">SPECIAL RECIPES</font></p>
        <p><font color="orange">FOR FESTIVALS</font></p>
        <p><img src="../images/bgg.jpg" width="373" height="277" /></p>
        <p>&nbsp;</p>
        <p>We also provide you with various</p>
        <p>scrumptious and mouth </p>
        <p>watering recipes </p>
        <p>specially made </p>
        <p>during the festive seasons.</p>
        <p>Visit our website</p>
        <p>to take hom more</p>
        <p>dishes to cook and </p>
        <p>ENJOY !!! </p>
        <p>&nbsp;</p></th>
        
        
        
        
      <th width="407" align="center" valign="top"  nowrap="nowrap"><p><font color="orange">MEET YOUR<br />
        CHEF</font></p>
        <p>&nbsp;</p>
        <p><img src="images/front page chef.jpg" width="368" height="251" /></p>
        <p>&nbsp;</p>
        <p>Meet our reknown professional</p>
        <p>chef Miss Darlin</p>
        <p>with her</font></p>
        <p> scrumptious and mouth</p>
        <p>watering Asian food recepis. </p>
        <p> Get to know more about our chef</p>
        <p>from our website !!!</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></th>
    </tr>
  </table></th>
</tr>
</table>

<?php
include("footer_inc.php");
?>
