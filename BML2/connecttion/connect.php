<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bml";


    $con = mysqli_connect($hostname , $username , $password , $dbname);

    if(!$con)
    {
        die(mysqli_error($con));
    }

?>