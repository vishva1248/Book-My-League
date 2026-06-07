<?php
if(isset($_GET['edit_profile'])){
  // session_start();
  $username_session = $_SESSION['username_session'];
    if($sql="SELECT * FROM `main` WHERE username='$username_session'"){
      $result=mysqli_query($con,$sql);
      $fetch_data=mysqli_fetch_array($result);
      $username=$fetch_data['username'];
      $email=$fetch_data['email'];
      $address=$fetch_data['address'];
      $phone_no=$fetch_data['phone_no'];
     
    }
  } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->
  <title>Profile Page</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"> -->
  <style>
        .profile_img{
            width: 90%;
            margin: auto;
            height: 90%; 
           
            
        }
    </style>
</head>
<body>
<div class="main">
<h2>IDENTITY</h2>
    <div class="card">
      <div class="card-body">
        <!-- <a href="edit_profile.php?edit_account"><i class="fa fa-pen fa-xs edit"></i></a> -->
        <table>
          <tbody>
            <tr>
              <td>Name</td>
              <td>:</td>
              <td><?php echo $username?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><?php echo $email;?></td>
            </tr>
            <tr>
              <td>Address</td>
              <td>:</td>
              <td><?php echo $address;?></td>
            </tr>
            <tr>
              <td>Phone No</td>
              <td>:</td>
              <td><?php echo $phone_no;?></td>
            </tr> 
            <!-- <tr>
              <td>image</td>
              <td>:</td>
              <td><?php echo "<img src='$user_image'  class='profile_img'>";?></td>

            </tr> -->
            <!-- <tr>
              <td></td>"
              <td>:</td>
              <td>Web Developer</td>
            </tr>
            <tr>
              <td>Skill</td>
              <td>:</td>
              <td>PHP, HTML, CSS, Java</td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>
