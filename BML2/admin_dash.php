<?php
if($sql_user = "SELECT * FROM `register`"){
$result_user = mysqli_query($con,$sql_user);
while($fetch_user_details = mysqli_fetch_assoc($result_user)){
$username_user = $fetch_user_details['username'];
$phone_no_user = $fetch_user_details['phone_no'];
$email_user = $fetch_user_details['email'];
$address_user = $fetch_user_details['address'];
echo "<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Profile Page</title>
  <style>
    table, th, td {
      border:1px solid #0ef;
      border-collapse: collapse;
      padding: 8px;
    }
    tr{
      color: #fff;
    }
    th {
      background-color: #081b27;
      color: #fff;
      width: 130000px;
    }
  </style>
</head>

<body>
  <div class='main'>
        <table>
          <tr>
            <th>Name</th>
            <th>Phone No</th>
            <th>Email</th>
            <th>Address</th>
          </tr>
          <tr>
            <td>$username_user</td>
            <td>$phone_no_user</td>
            <td>$email_user</td>
            <td>$address_user</td>
          </tr>
        </table>
  </div>
</body>

</html>";
}
}
?>
