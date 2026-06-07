<?php
include('getip.php');
include('connecttion\connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['submit_btn'])){
      $email = $_POST['email'];
      $username = $_POST['username'];
      $address = $_POST['address'];
      $phone_no = $_POST['phone_no'];
      $password = $_POST['password'];
      $c_password = $_POST['c_password'];
      // $profile = $_POST['po_img'];
      $uid=mt_rand();
      $ip=getIP();
      $sql_check = "SELECT * FROM `po_register` WHERE username = '$username' or email = '$email'";
      $result_check = mysqli_query($con,$sql_check);
      if($result_check){
        $num_check = mysqli_num_rows($result_check);
        if($num_check >0){
          echo "<script>alert('username or Email already exists ')</script>";
        }
        else{
          if($password==$c_password){
            $sql = "INSERT INTO `po_register`(`username`, `password`, `email`, `phone_no`, `address`, `user_ip`,`uid`) VALUES ('$username','$password','$email','$phone_no','$address','$ip' ,'$uid')";
            $run_query = mysqli_query($con,$sql);
            header("Location:next_signup_po.php?uid=$uid");
            // if(){
            //   $run_sql_query="INSERT INTO `main`(`username`, `password`,`email`,`phone_no`, `address`,`user_ip`,`uid`) VALUES ('$username','$password','$email','$phone_no','$address','$ip' ,'$uid')";
            //   $result_query=mysqli_query($con,$run_sql_query);
            //   echo "<script>alert('Login Succesfull')</script>";
            // }

        }
        else{
            echo "<script>alert('password and confirm password doesnot match ')</script>";

        }
        }
      }
         
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="assets\css\po_signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Place-Address</span>
            <input type="text" name="address" placeholder="Enter your Place address" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone_no" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="c_password" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit_btn" value="Next">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
