<?php
include("connecttion\connect.php");
// include('navbar.php');
session_start();
if(!isset($_SESSION['username_session'])){
  session_abort();
  include("login.php");
}
else{
  echo"<!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
      <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js' integrity='sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js' integrity='sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS' crossorigin='anonymous'></script> -->
    <title>Profile Page</title>
    <link rel='stylesheet' href='assets\css\Profile.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
  </head>
  <body>
    <div class='navbar-top'>
      <div class='title'>
      <h1>Profile</h1>  
    </div>
    </div>
    <div class='sidenav'>
      <div class='profile'>
        <img src='assets\image\WhatsApp Image 2023-09-18 at 21.18.46.jpg' alt='' width='100' height='100'>
        <div class='name'>
          Book My League
        </div>
      </div>
      <div class='sidenav-url'>
      <div class='url'>
          <a href='home.php' class=''>Home</a>
          <hr align='center'>
        </div>
   
      <div class='url'>
          <a href='profile.php?edit_profile'>My Details</a>
          <hr align='center'>
        </div>
        <div class='url'>
          <a href='profile.php?setting'>Settings</a>
          <hr align='center'>
        </div>
        <div class='url'>
          <a href='logout.php'>Logout</a>
          <hr align='center'>
        </div>
      </div>
    </div>
  </body>
  </html>
  ";
if(isset($_GET['edit_profile'])){
    include('edit_profile.php');
  }
if(isset($_GET['setting'])){
    include('setting.php');
  }
}
?>
