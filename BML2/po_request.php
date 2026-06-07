  <!DOCTYPE html>
  <html lang='en'>

  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="assets\css\po_request.css">

    <title>Profile Page</title>
    <!-- not in use so ignore 
      <style>
      table, th, td {
        border:1px solid #0e3d5a;
        border-collapse: collapse;
        padding: 8px;
      }
      tr{
        color: #fff;
        font-size: 20px;
        /* padding-top:10px ; */
        text-align: center;
      }
      th {
        background-color: #081b27;
        color: #fff;
        font-size: 20px;
        width: 1300000px;
      }
      .main table tr td a{
          text-decoration: underline;
          color: #fff;
      }
    </style> -->
  </head>

  <body>
    <br><br>
    <?php
              $request_po_sql="SELECT * FROM `po_register`";
              $run_query_po_request=mysqli_query($con,$request_po_sql);
              while($row_num_request=mysqli_fetch_array( $run_query_po_request)){
                $place_name=$row_num_request['place_name'];
                $uid=$row_num_request['uid'];
                  echo"  
                  <div class='main'> 
                    <div class='card'>
                      <a href='view_more.php?uid=$uid'>
                        <div class='card-body'>
                          $place_name
                          <div class='yes-no'>
                            <button> <a href='accept.php?uid=$uid'>accept</a></button>
                            <button> <a href='decline.php?uid=$uid'>decline</a></button>
                          </div>
                        </div>
                      </a>    
                    </div>
                  </div>";
            }
              ?>
    <!-- 
      ignore
      <div class='main'>
          <table>
            <tr>
              <th>Place Name</th>
              <th>owner name</th>
              <th>city</th>
              <th>more</th>
            </tr>
            
  ?>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><a href="view_more.php">View More</a></td>
            </tr>

          </table>
    </div> -->
  </body>

  </html>