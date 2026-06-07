<!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='assets\css\edit_account.css'>
    <title>Edit Account</title>
  </head>
<?php
include('connecttion\connect.php');
session_start();
$username_edit_account=$_SESSION['username_session'];
if($sql_edit_account="SELECT * FROM `main` WHERE username = '$username_edit_account'"){
  $result_edit_account=mysqli_query($con,$sql_edit_account);
  $fetch_data_edit_account=mysqli_fetch_array($result_edit_account);
  $uid_edit_account = $fetch_data_edit_account['uid'];
  $username_edit_account_fetchdata=$fetch_data_edit_account['username'];
  $email_edit_accounr_fetchdata=$fetch_data_edit_account['email'];
  $address_edit_account_fetchdata=$fetch_data_edit_account['address'];
  $phone_no_edit_account_fetchdata=$fetch_data_edit_account['phone_no'];
  $password_edit_account_fetchdata=$fetch_data_edit_account['password'];
  echo"
  <body>
    <div class='container'>
      <h1>Edit Account</h1>
      <form action='' method='post'>
        <label for='username'>Username:</label>
        <input type='text' id='username' name='user_username' placeholder='$username_edit_account_fetchdata' required>
  
        <label for='email'>Email:</label>
        <input type='email' id='email' name='email' placeholder='$email_edit_accounr_fetchdata' required>
  
        <label for='address'>Address:</label>
        <input type='text' id='address' name='address' placeholder='$address_edit_account_fetchdata' required>
  
        <label for='phone_no'>phone no:</label>
        <input type='text' id='phone_no' name='phone_no' placeholder='$phone_no_edit_account_fetchdata' required>
  
        <label for='password'>New Password:</label>
        <input type='password' id='password' name='password' placeholder='$password_edit_account_fetchdata' required>
  
        <label for='c_password'>confirm Password:</label>
        <input type='password' id='c_password' name='c_password' placeholder='Enter new password again' required>
  
        <button type='submit' name='submit_btn'>Save Changes</button>
      </form>
    </div>
  </body>";
  if(isset($_POST['submit_btn'])){
    $uid = $uid_edit_account;
    $username = $_POST['user_username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];
    $confirm_password_edit_account= $_POST['c_password'];
    if($password == $confirm_password_edit_account){
      $update_data_edit_account = "UPDATE `main` SET `username`='$username',`email`='$email',`address`='$address',`phone_no`='$phone_no',`password`='$password'WHERE uid='$uid'";
      $result_upadte=mysqli_query($con,$update_data_edit_account);
      if($sql_admin="SELECT * FROM `admin` WHERE `uid` = $uid_edit_account"){
        $result_admin_update=mysqli_query($con,$sql_admin);
        $uid = $uid_edit_account;
        $username = $_POST['user_username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone_no = $_POST['phone_no'];
        $password = $_POST['password'];
        $update_data_admin = "UPDATE `admin` SET `admin_username`='$username',`admin_password`='$password',`email`='$email',`phone_no`='$phone_no',`address`='$address'WHERE uid='$uid'";
        $result_update_admin = mysqli_query($con,$update_data_admin);
      }
      if($sql_user="SELECT * FROM `register` WHERE `uid` = $uid_edit_account"){
        $result_admin_update=mysqli_query($con,$sql_user);
        $uid = $uid_edit_account;
        $username = $_POST['user_username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone_no = $_POST['phone_no'];
        $password = $_POST['password'];
        $update_data_user = "UPDATE `register` SET `username`='$username',`password`='$password',`email`='$email',`phone_no`='$phone_no',`address`='$address'WHERE uid='$uid'";
        $result_update_user = mysqli_query($con,$update_data_user);
      }
      if($sql_po_register="SELECT * FROM `po_register` WHERE `uid` = $uid_edit_account"){
        $result_admin_update=mysqli_query($con,$sql_po_register);
        $uid = $uid_edit_account;
        $username = $_POST['user_username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone_no = $_POST['phone_no'];
        $password = $_POST['password'];
        $update_data_po_register = "UPDATE `po_register` SET `username`='$username',`password`='$password',`email`='$email',`phone_no`='$phone_no',`address`='$address'WHERE uid='$uid'";
        $result_update_po_register = mysqli_query($con,$update_data_po_register);
      }
      if($result_upadte){
        echo "<script>alert('Your account has been updated successfully!')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
      }
    }
}
}
?>
</html>