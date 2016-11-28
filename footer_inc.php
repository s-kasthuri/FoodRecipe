<script>
function myFunction(el) {
  // First hide all dropdowns except the clicked one
  var dropdowns = document.querySelectorAll(".dropdown-content");
  for(var i = 0; i < dropdowns.length; i++) {
    if(el.nextElementSibling === dropdowns[i]) continue;
    dropdowns[i].classList.remove("show");
  }
  
  // Then show requested one
  el.nextElementSibling.classList.toggle("show");
}

window.myFunction = myFunction;

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>


<footer>
<div style="padding:1em" align="center" style="color:#000000">
<table border="0">
<tr align="center"><td><font color="#FFFFFF">Copyright (c) 2016 TheKitchn.com</font></td></tr>
<tr align="center"><td><font color="#FFFFFF">Designed & Created By: Kasthuri Shan</font></td></tr>
<tr align="center"><td><font color="#FFFFFF">Made For: Developing Modern Web @ INTIInternational College</font></td></tr>
<tr align="center"><td><font color="#FFFFFF">-----------------------------------------------------------</font></td></tr>
<tr align="center"><td><font color="#FFFFFF">Contact Us Via: 
<span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>


</font></td></tr>
</table>
</div>
</footer>


</body>
</html>
