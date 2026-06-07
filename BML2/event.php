<?php
if($sql_user = "SELECT * FROM `event`"){
$result_user = mysqli_query($con,$sql_user);
while($fetch_user_details = mysqli_fetch_assoc($result_user)){
$username_user = $fetch_user_details['event_name'];
$phone_no_user = $fetch_user_details['event_address'];
$email_user = $fetch_user_details['event_organizer'];
$address_user = $fetch_user_details['event_date'];
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
            <th>event Name</th>
            <th>address</th>
            <th>organizer</th>
            <th>date</th>
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
