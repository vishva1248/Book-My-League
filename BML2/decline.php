<?php
include('connecttion\connect.php');
if(isset($_GET['uid'])){
    $uid=$_GET['uid'];
    $delete_query="DELETE FROM `po_register` WHERE uid='$uid'";
    $query_delete=mysqli_query($con,$delete_query);
    header("Location:home.php");

}
?>