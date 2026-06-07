<?php
include("connecttion\connect.php");
$po=$_GET['po'];
$user=$_GET['user'];
    if(isset($_POST['submit_btn'])){
        $uid_po = number_format($po);
        $uid_user = $user;
        $date=$_POST['date'];
        $time=$_POST['time'];
        $selcet_query="INSERT INTO `booking`(`po_uid`, `user_uid`, `date`, `time`) VALUES ('$uid_po','$uid_user','$date','$time')";
        $run_query_data=mysqli_query($con,$selcet_query);
        header('location:home.php');

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>  -->
  <title>Profile Page</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"> -->
  <style>
        .profile_img{
            width: 90%;
            margin: auto;
            height: 90%; 
           
            
        }
        .main .card {
    border-radius: 18px;
    box-shadow: 0px 0px 6px 6px #0ef;
    height: auto;
    font-size: 40px;
    margin-bottom: 20px;
    margin-left: 37%;
    margin-right: 39%;
    padding: 30px 20px 20px 50px;
}

.main .card table {
    border: none;
    color: white;
    font-size: 20px;
    height: 270px;
    margin-left: 20%;
    width: 80%;
}
body {
    background-color: #081b27;
    font-family: Arial;
    overflow: hidden;
    margin-top: 10%;
}
.book-btn {
    background-color: #0ef;
    border: none;
    color: #081b27;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
.tr td input-text{
    font-size: 49px;

}

    </style>
</head>
<body>
<div class="main">
<h2></h2>
    <div class="card">
      <div class="card-body">
        <!-- <a href="edit_profile.php?edit_account"><i class="fa fa-pen fa-xs edit"></i></a> -->
        <center>
        <form action="timeslot.php" method="POST">
        <table>
        <tr>
                                <td class="label-td" colspan="2">
                                    <label for="date" class="form-label">Session Date: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="date" name="date" class="input-text" min="'.date('Y-m-d').'" required><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <label for="time" class="form-label">Schedule Time: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="time" name="time" class="input-text" placeholder="Time" required><br>
                                </td>
                            </tr>
                               </table>
                               <button class="book-btn" name="submit_btn">book now</button>
</center>
</form>

</div>
    </div>
</body>
</html>
