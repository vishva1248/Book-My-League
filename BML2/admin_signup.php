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
        $uid=mt_rand();
        $ip = getIP();
        if($password==$c_password){
            $sql = "INSERT INTO `admin`(`admin_username`, `admin_password`, `email`, `phone_no`, `address`, `user_ip`,`uid`) VALUES ('$username','$password','$email','$phone_no','$address','$ip','$uid')";
            if($run_query = mysqli_query($con,$sql)){
              $run_sql_query="INSERT INTO `main`(`username`, `password`,`email`,`phone_no`, `address`,`user_ip`,`uid`) VALUES ('$username','$password','$email','$phone_no','$address','$ip','$uid')";
              $result_query=mysqli_query($con,$run_sql_query);
              echo "<script>alert('Login Succesfull')</script>";
              header('Location:login.php');
            }

        }
        else{
            echo "<script>alert('password and confirm password doesnot match ')</script>";

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
    
    <link rel="stylesheet" href="assets\css\p_signup.css">
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
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter your address" required>
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
        <!-- <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div> -->
        <div class="button">
          <input type="submit" name="submit_btn" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
