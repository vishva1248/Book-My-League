<?php
include('connecttion\connect.php');
if(isset($_GET['uid'])){
    $uid=$_GET['uid'];
    $delete_query="DELETE FROM `po_confirm` WHERE uid='$uid'";
    if($query_delete=mysqli_query($con,$delete_query)){
        $delete_query_main="DELETE FROM `main` WHERE uid='$uid'";
        $query_delete_main=mysqli_query($con,$delete_query_main);
        header("Location:home.php");
    }

}
?>