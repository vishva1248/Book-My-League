<?php
include('connecttion\connect.php');
if(isset($_GET['uid'])){
    $uid=$_GET['uid'];
    $select_query_veiw_more="SELECT * FROM `po_register` WHERE uid=$uid";
    $run_query_veiw_more=mysqli_query($con,$select_query_veiw_more);
    $row=mysqli_fetch_array($run_query_veiw_more);
      $place_owner=$row['username'];
      $place_name=$row['place_name'];
      $email=$row['email'];
      $address=$row['address'];
      $city=$row['place_city'];
      $phone_no=$row['phone_no'];
      $po_app=$row['p_approval_img'];
    }
?>
<html>
    <head>
        <style>
             /* Style inputs, select elements and textareas */
body {
	
	background: #081b27;

}



/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-size
}

/* Style the submit button */
.btn {
  background-color: #081b27;
  color: white;
  padding: 12px 20px;
  border: 2px solid #cb0303;
  box-shadow: 0 0 18px #cb0303;
  border-radius: 4px;
  cursor: pointer;
  /* float: right; */
}

h1{
  text-align: center;
  color: aliceblue;
  margin-top:3%;

}

/* Style the container */
.container {
  border-radius: 5px;
  color: aliceblue;
  background-color: #081b27;
  font-size: 20px;
  border: 2px solid #0ef;
  margin-left:20%;
  margin-top:2%;
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
/* 
Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
} */
            </style>
</head>
<body>
  <h1> Place Approvel </h1>
<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Place Owner:-<?php echo $place_owner;?></label>
      </div>
      <div class="col-75">

    </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Place Name:-<?php echo $place_name;?></label>
      </div>
      <div class="col-75">

    </div>
 </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Email:-<?php echo  $email;?></label>
      </div>
      <div class="col-75">
      
      </div>
    </div>
 
    <div class="row">
      <div class="col-25">
        <label for="subject">Address:-<?php echo $address;?></label>
      </div>
      <div class="col-75">

    </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">City:-<?php echo $city ;?></label>
      </div>
      <div class="col-75">

    </div>
    </div> <div class="row">
      <div class="col-25">
        <label for="subject">Phone Number:-<?php echo $phone_no;?></label>
      </div>
      <div class="col-75">

    </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="subject">Approvel Certificate:-<?php echo"<img src='tempfolder/$po_app' width='100%'>";?></label>
      </div>
      <div class="col-75">

    </div>
    </div>

    <div class="row">
   <center> <button class="btn"><a href="accept.php">Accept</a></button>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp <button class="btn"><a href="decline.php">Decline</a></button>
</center>

    </div>
  </form>
</div>
</body>
</html>