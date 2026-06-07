<?php
include('getip.php');
include('connecttion\connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit_btn'])){
        $E_name = $_POST['E_name'];
        $E_password = $_POST['E_password'];
        $E_by = $_POST['E_by'];
        $E_address = $_POST['E_address'];
        $E_date = $_POST['E_date'];
        $c_password = $_POST['c_password'];
        $ip = getIP();
        if($password==$c_password){
            $sql = "INSERT INTO `event`(`E_name`, `E_password`, `E_address`, `E_by`, `E_date`) VALUES ('$E_name','$E_password','$E_address','$E_by',`$E_date`)";
            if($run_query = mysqli_query($con,$sql)){
              $run_sql_query="INSERT INTO `event`(`E_name`, `E_password`, `E_address`, `E_by`, `E_date`) VALUES ('$E_name','$E_password','$E_address','$E_by',`$E_date`)";
              $result_query=mysqli_query($con,$run_sql_query);
              echo "<script>alert('Event successfully created')</script>";
              header('Location:');
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
    
    <link rel="stylesheet" href="assets\css\p_signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Event Registration</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
        
          <div class="input-box">
            <span class="details">Event name</span>
            <input type="text" name="E_name" placeholder="Enter your...." required>
          </div>
          <div class="input-box">
            <span class="details">Event Address</span>
            <input type="text" name="E_address" placeholder="Enter event address" required>
          </div>
          <div class="input-box">
            <span class="details">Event by</span>
            <input type="text" name="E_by" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="E_password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="c_password" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit_btn" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
