<?php
include("connecttion\connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="assets\css\admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
  <div class="navbar-top">
    <div class="title">
    <h1>Admin Dashboard</h1>  
  </div>
  </div>
  <div class="sidenav">
    <div class="profile">
      <img src="assets\image\WhatsApp Image 2023-09-18 at 21.18.46.jpg" alt="" width="100" height="100">
      <div class="name">
        Book My League
      </div>
    </div>
    <div class="sidenav-url">
    <div class="url">
        <a href="home.php" class="">Home</a>
        <hr align="center">
      </div>
      <div class="url">
        <a href="admin.php?Users" class="">Users</a>
        <hr align="center">
      </div>  
    <div class="url">
        <a href="admin.php?po">Place owners</a>
        <hr align="center">
      </div>
      <div class="url">
        <a href="admin.php?event">events</a>
        <hr align="center">
      </div>
      <div class="url">
        <a href="profile.php?edit_profile">Profile</a>
        <hr align="center">
      </div>
      <div class="url">
        <a href="admin.php?po_request">Place owner Request</a>
        <hr align="center">
      </div>
    </div>
  </div>
  <?php
 if(isset($_GET['Users'])){
  include('admin_dash.php');
}

if(isset($_GET['po'])){
  include('po.php');
}

if(isset($_GET['event'])){
  include('event.php');
}
if(isset($_GET['manage_website'])){
  include('manage_website.php');
}
if(isset($_GET['po_request'])){
include('po_request.php');
}
  ?>
</body>
</html>