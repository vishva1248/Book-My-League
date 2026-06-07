<?php
include('connecttion\connect.php');
session_start();
$delete_account_username=$_SESSION['username_session'];
if($delete_account_query="SELECT * FROM `main` WHERE username = '$delete_account_username'"){
    $result_delete_account=mysqli_query($con,$delete_account_query);
    $fetch_data_delete_account=mysqli_fetch_array($result_delete_account);
    if($uid = $fetch_data_delete_account['uid']){
        $delete_account_sql="DELETE FROM `main` WHERE uid = $uid";
        if($result_sql_delete_account=mysqli_query($con,$delete_account_sql)){
            if($delete_query_register="DELETE FROM `register` WHERE uid = $uid"){
                $run_query_register=mysqli_query($con,$delete_query_register);
                echo "<script>alert('Your account has been deleted successfully!')</script>";
                echo "<script>window.open('logout.php','_self')</script>";
            }
            if($delete_query_admin="DELETE FROM `admin` WHERE uid = $uid"){
                $run_query_admin=mysqli_query($con,$delete_query_admin);
                echo "<script>alert('Your account has been deleted successfully!')</script>";
                echo "<script>window.open('logout.php','_self')</script>";
            }
            if($delete_query_po_register="DELETE FROM `po_register` WHERE uid = $uid"){
                $run_query_po_register=mysqli_query($con,$delete_query_po_register);
                echo "<script>alert('Your account has been deleted successfully!')</script>";
                echo "<script>window.open('logout.php','_self')</script>";
            }
        }
    }
    
}
?>