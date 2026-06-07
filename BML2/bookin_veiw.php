<?php  
include('connecttion\connect.php'); 
session_start();
if(isset($_SESSION['username_session'])){
$username_session= $_SESSION['username_session'];
if($sql="")
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\booking_veiw.css">
    <title>Document</title>
</head>
<body>
<div class="main">
<h2>Booking</h2>
<br>
    <div class="card">
      <a href="edit_account.php">
        <div class="card-body">
          <?php ?>
        </div>
      </a>    
    </div>
    <br>
</body>
</html>