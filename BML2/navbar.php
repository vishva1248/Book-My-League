<?php
session_start();
if(isset($_SESSION['logedin']) && $_SESSION['logedin']== true){
  $profile_page='<a href="profile.php?edit_profile">Profile</a>';
}
elseif(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']== true){
  $admin_dashboard='<a href="admin.php">Dashboard</a>';
  $profile_page='<a href="profile.php?edit_profile">Profile</a>';
}
elseif(isset($_SESSION['placeonwerlogin']) && $_SESSION['placeonwerlogin']== true){
  $placeowner_dashboard='<a href="placeowner.php">Dashboard</a>';
  $profile_page='<a href="profile.php?edit_profile">Profile</a>';

}
else{
  $login_page='<a href="login.php">Login</a>';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets\css\navigationbar.css">

</head>
<body>

<div id="navbar">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets\image\WhatsApp Image 2023-09-18 at 21.18.46.jpg" alt="" width="150px" height="90px">
  <br>
  <a class="active" href="home.php">Home</a>
    <a href="contact.php">Contact Us</a>
    <a href="aboutus.php">About Us</a>
    <?php
      if(isset($_SESSION['logedin']) && $_SESSION['logedin']== true){
        echo $profile_page;
      }
      elseif(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']== true){
        echo $profile_page;
        echo $admin_dashboard;
      }
      elseif(isset($_SESSION['placeonwerlogin']) && $_SESSION['placeonwerlogin']== true){
        echo $profile_page;
        echo $placeowner_dashboard;
      }
      else{
        echo $login_page;
      }  
    ?>
  <div id="navbar-right">
    
  </div>
</div>

<!-- <div style="margin-top:210px;padding:15px 15px;font-size:30px"></div> -->
 

<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "15px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "15px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>

</body>
</html>
