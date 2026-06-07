<?php
include('connecttion\connect.php');
if(isset($_GET['po_uid'])){
    $uid= $_GET['po_uid'];
    $user_id=$_GET['user_uid'];
    $select_query_booking="SELECT * FROM `po_confirm` WHERE uid='$uid'";
    $run_booking=mysqli_query($con, $select_query_booking);
    $row_fetch_data=mysqli_fetch_array($run_booking);
    $img1=$row_fetch_data['img1'];
    $img2=$row_fetch_data['img2'];
    $img3=$row_fetch_data['img3'];
    $place_name=$row_fetch_data['place_name'];
    $email=$row_fetch_data['email'];
    $address=$row_fetch_data['address'];
    $city=$row_fetch_data['place_city'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;
	background: #081b27;
}
.mySlides {display: none;}
img {vertical-align: middle;}


/* Slideshow container */
.slideshow-container {
  max-width: 900px;
  max-height: 900px;
float: left;
  position: relative;
  margin-top: 40px;
  box-shadow: 0 0 20px #0ef;
  margin-left: 40px;
  border-radius:15px; 
  border: 2px solid #0ef;}

.doot{
  margin-left: 1%;
}

/* Caption text */
.text {
  color: #0ef;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.btn {
  background-color: #081b27;
  text-decoration: none;
  overflow: hidden;
  color: #fff;
  margin-top: 13%;
  margin-right: 10%;
  font-size: 25px;
  float:right;
  padding: 20px 70px;
  border: 2px solid #cb0303;
  box-shadow: 0 0 18px #cb0303;
  border-radius: 4px;
  cursor: pointer;
  /* float: right; */
}
/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  float: left;
  box-shadow: 0 0 16px #0ef;
  /* margin-right: 40px; */
  background-color: #081b27;
  border-radius: 50%; 
  /* margin-top: 10px; */
  display: inline-block;
  transition: background-color 0.6s ease;
}



h1{
  text-align: center;
  color: aliceblue;
  margin-top:3%;
  font-size: 45px;
}

/* Style the container */
.container {
  border-radius: 5px;
  color: aliceblue;
  background-color: #081b27;
  font-size: 20px;
  border: 2px solid #0ef;
  margin-left:18%;
  margin-top:39%;
  margin-right:20%;
  box-shadow: 0 0 20px #0ef;
	height: auto;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color: #0ef;
  
}





.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<center>
<h1>Place Details</h1>
</center>
<center>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="<?php echo "tempfolder/$img1";?>" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="<?php echo "tempfolder/$img2";?>" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="<?php echo "tempfolder/$img3";?>" style="width:100%">
</div>
</div>
<?php
echo "<button class='btn'><a href='timeslot.php?po=$uid&user=$user_id'>Book Now</a></button>";
?>
<br>

<!-- <div class="doot">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> -->


</center>

<div class="container">

  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Place Name:-<?php echo $place_name?></label>
      </div>
      <div class="col-75">

    </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Email:-<?php echo $email?></label>
      </div>
      <div class="col-75">

    </div>
 </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Address:-<?php echo $address?></label>
      </div>
      <div class="col-75">
      
      </div>
    </div>
 
    <div class="row">
      <div class="col-25">
        <label for="subject">City:-<?php echo $city?></label>
      </div>
      <div class="col-75">

    </div>
    </div>
   

    <!-- </div> <div class="row">
      <div class="col-25">
        <label for="subject">Phone Number</label>
      </div>
      <div class="col-75">

    </div>
    </div> -->
<!-- 
    <div class="row">
      <div class="col-25">
        <label for="subject">Approvel Certificate</label>
      </div>
      <div class="col-75">

    </div>
    </div>

    <div class="row">
   <center> <button class="btn">Accept</button>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp      <button class="btn">Decline</button>
</center>

    </div> -->
  </form>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}</script>

</body>
</html> 
