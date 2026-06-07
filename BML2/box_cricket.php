<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\box-cricketpage.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->
    <title>Document</title>
</head>
<body>
    <br><br><br>
    <?php   
      include("sub-navbar.php");
      include('connecttion\connect.php'); 
      $sql="SELECT * FROM `po_confirm`";
      $sql_run=mysqli_query($con,$sql);
      session_start();
      if(isset($_SESSION['username_session'])){
        $username_session= $_SESSION['username_session'];
      $sql_query="SELECT * FROM `main` WHERE username='$username_session'";
      $result_query_data=mysqli_query( $con ,$sql_query);
      $fetch_data_query= mysqli_fetch_array($result_query_data);
      $user_uid= $fetch_data_query["uid"];
      while($fetch_data=mysqli_fetch_array($sql_run)){
          $place_name= $fetch_data["place_name"];
          $place_city=$fetch_data['place_city'];
          $img1 = $fetch_data['img1'];
          $uid = $fetch_data['uid'];
          echo"<div class='dashboard'>
          <div class='events-container'>
            <div class='event-card' id='event-1'>
              <img src='tempfolder/$img1' alt=''>
              <h2>$place_name</h2>
              <br>
              <p>$place_city</p>
              <br>
              <button class='book-btn'><a href='bookin.php?po_uid=$uid&user_uid=$user_uid'>book now</a></button>
            </div>
          </div>
        </div>" ;
      }
      }
      else{
        header('location:login.php');

      }
      
    ?>
</body>
</html>