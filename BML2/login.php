<?php
include("connecttion\connect.php");
include("getip.php");
$login=0;
$admin=0;
$placeowner=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user=0;
    $success=0;
    if(isset($_POST['signup_btn'])){
        $signup_username=$_POST['signup_name'];
        $email=$_POST['email'];
        $signup_password=$_POST['singup_password'];
        $signup_cpassword=$_POST['signup_cpassword'];
        $uid=mt_rand();
        $ip=getIP();
        $sql="SELECT * FROM `register` WHERE username='$signup_username' or email='$email'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num= mysqli_num_rows($result);
            if($num>0){
                $user=1;
                echo "<script>alert('username or Email already exists ')</script>";
            }
            else{
                if($signup_password==$signup_cpassword){
                    $query="INSERT INTO `register`(`username`, `password`, `email`, `user_ip`,`uid`) VALUES ('$signup_username','$signup_password','$email','$ip','$uid')";
                    if($run_query=mysqli_query($con,$query)){
                        $run_sql_query="INSERT INTO `main`(`username`, `password`,`email`,`user_ip`,`uid`) VALUES ('$signup_username','$signup_password','$email','$ip','$uid')";
                        $result_query=mysqli_query($con,$run_sql_query);
                    }
                    
                    if($run_query){
                        $success=1;
                    }
                    else{
                        die(mysqli_error($con));
                    }
                }
                else{
                    echo "<script>alert('password and confirm password doesnot match ')</script>";
                }
            }
        }
    }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['login_btn'])){
        $l_username=$_POST['login_username'];
        $l_password=$_POST['login_password'];
        if($sql_login="SELECT * FROM `register` WHERE username='$l_username' and password='$l_password'"){
            $result_login=mysqli_query($con,$sql_login);
            if($result_login){
                $num_login = mysqli_num_rows($result_login);
                if($num_login>0){
                    session_start();
                    $login=1;
                    $_SESSION['logedin']=true;
                    $_SESSION['username_session']=$l_username;    
                    header('location:home.php');
                }
                else{
                    echo "<script>alert('Invalid Username Or Password Please Try Again! ')</script>"; 
                } 
            } 
        }
        if($admin_sql="SELECT * FROM `admin` WHERE admin_username='$l_username' and admin_password='$l_password'"){
            $tempadminusername=$l_username;
            $admin_login=mysqli_query($con,$admin_sql);
            if($admin_login){
                $num_admin = mysqli_num_rows($admin_login);
                if($num_admin>0){
                    session_start();
                    $admin=1;
                    $_SESSION['adminlogin']=true;
                    $_SESSION['username_session']=$l_username;
                    header('location:home.php');
                }
              
            }
        }
        if($placeowner_sql="SELECT * FROM `po_confirm` WHERE username='$l_username' and password='$l_password'")  {
            $tempplaceownerusername=$l_username;
            $placeowner_login=mysqli_query($con,$placeowner_sql);
            if($placeowner_login){
                $num_placeowner=mysqli_num_rows($placeowner_login);
                if($num_placeowner>0){
                    session_start();
                    $placeowner=1;
                    $_SESSION['placeonwerlogin']=true;
                    $_SESSION['username_session']=$l_username;
                    header('location:home.php');
                }
                
            }
        }
        if($placeowner_sql="SELECT * FROM `po_register` WHERE username='$l_username' and password='$l_password'")  {
            $tempplaceownerusername=$l_username;
            $placeowner_login=mysqli_query($con,$placeowner_sql);
            if($placeowner_login){
                $num_placeowner=mysqli_num_rows($placeowner_login);
                if($num_placeowner>0){
                    header('location:pending.php');
                }
                
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets\css\login.css">
</head>
<body>
    <?php
    include("navbar.php");
    ?>
   <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>
        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">
                Login
            </h2>
            <form action="login.php" method="POST">
                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="login_username" required>
                    <label>username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" name="login_password" required>
                    <label>password</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="submit" class="btn animation" name="login_btn" style="--i:3; --j:24;">Login</button>
                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>Don't have an account?<a href="#" class="signup-link">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">welcome back!</h2>
        </div>
        <!-- New -->
        <div class="form-box signup">
            <h2 class="animation" style="--i:17; --j:0;">
                Sign Up
            </h2>
            <form action="login.php" method="POST">
                <div class="input-box animation" style="--i:18; --j:1;">
                    <input type="text" name="signup_name" required>
                    <label>username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:19; --j:2;">
                    <input type="email" name="email" required>
                    <label>Email</label>
                    <i class='bx bxl-gmail' ></i>
                </div>
                <div class="input-box animation" style="--i:20; --j:3;">
                    <input type="password" name="singup_password" required>
                    <label>password</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="input-box animation" style="--i:21; --j:4;">
                    <input type="password" name="signup_cpassword" required>
                    <label>confirm password</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button name="signup_btn" type="submit" class="btn animation" style="--i:22; --j:4;">Sign Up</button>
                <div class="logreg-link animation" style="--i:23; --j:5;">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
        <div class="info-text signup">
            <h2 class="animation" style="--i:17; --j:0;">welcome to BML</h2>
        </div>
   </div>
    <script src="Script.js"></script>
</body>
</html>