<!DOCTYPE html>
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
            <th>Action</th>
          </tr>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `po_confirm`");
          
          while($row=mysqli_fetch_array($sql))
          {
            $uid=$row['uid'];
          ?>
          
                                <tr>
                                 
                                  <td><?php echo $row['username'];?></td>
                                  <td><?php echo $row['phone_no'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td><?php echo $row['address'];?> 
                                  <td><?php echo"<a href='remove_account_po.php?uid=$uid'>Remove Account</a>";?></td>
          </tr>
          <?php
          }
          ?>
        </table>
  </div>
</body>

</html>
