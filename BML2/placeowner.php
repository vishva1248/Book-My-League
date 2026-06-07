<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="assets\css\placeowner.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
  <div class="navbar-top">
    <div class="title">
    <h1>Placeowner Dashboard</h1>  
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
        <a href="profile.php" class="">profile</a>
        <hr align="center">
      </div>
      <!-- <div class="url">
        <a href="placeowner.php?add_place_po_dash" class="">add place</a>
        <hr align="center">
      </div> -->
      <div class="url">
        <a href="placeowner.php?bookin_veiw" class="">booking</a>
        <hr align="center">
      </div>
    </div>
  </div>
  <?php
    if(isset($_GET['bookin_veiw'])){
        include('bookin_veiw.php');
    }
  ?>
  </body>
</html>