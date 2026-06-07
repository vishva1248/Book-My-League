<?php
include('connecttion\connect.php');
if(isset($_GET['uid'])){
    $uid=$_GET['uid'];
    $select_query_accept="SELECT * FROM `po_register` WHERE uid = $uid";
    if($run_query_accept = mysqli_query($con,$select_query_accept)){
        $fetch_data_accept = mysqli_fetch_array($run_query_accept);
        $username= $fetch_data_accept['username'];
        $password=$fetch_data_accept['password'];
        $email=$fetch_data_accept['email'];
        $phone_no=$fetch_data_accept['phone_no'];
        $address=$fetch_data_accept['address'];
        $uid=$fetch_data_accept['uid'];
        $user_ip=$fetch_data_accept['user_ip'];
        $place_name=$fetch_data_accept['place_name'];
        $place_city=$fetch_data_accept['place_city'];
        $place_phone_no=$fetch_data_accept['place_phone_no'];
        $p_approval_img=$fetch_data_accept['p_approval_img'];
        $po_img=$fetch_data_accept['po_img'];
        $img1=$fetch_data_accept['img1'];
        $img2=$fetch_data_accept['img2'];
        $img3=$fetch_data_accept['img3'];
        $insert_query_accept="INSERT INTO `po_confirm`(`username`, `password`, `email`, `phone_no`, `address`, `user_ip`, `img1`, `img2`, `img3`, `uid`, `place_name`, `place_city`, `place_phone_no`, `p_approval_img`, `po_img`) VALUES ('$username','$password','$email','$phone_no','$address','$user_ip','$img1','$img2','$img3','$uid','$place_name','$place_city','$place_phone_no','$p_approval_img','$po_img')";
        if($run_update=mysqli_query($con,$insert_query_accept)){
            $sql_main="INSERT INTO `main`(`username`, `password`, `phone_no`, `email`, `address`, `user_ip`,`uid`) VALUES ('$username','$password','$phone_no','$email','$address','$user_ip','$uid')";
            if($run_main=mysqli_query($con,$sql_main)){
            $delete_query="DELETE FROM `po_register` WHERE uid='$uid'";
            $query_delete=mysqli_query($con,$delete_query);
            }
        }
        echo "<script>alert('place owner request accepted')</script>";
        header("Location:home.php");

    }
}
?>