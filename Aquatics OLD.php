<?php

// Initialize the session

session_start();
$con=mysqli_connect("localhost","root","","honestcraig_db");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "SELECT * from listings where product_category = 'Aquatics';";
    $query = mysqli_query($con,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Title </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="stylesheet.css" type="text/css" rel="stylesheet">
</head>

	<body >
<nav class="navbar navbar-expand-lg">
        <a class="navbar-brand col-9" href="#" style="text-align: center; font-size: 28pt">HonestCraig, Shopping Responsibly</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #b9bec1">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Feedback <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Sign up</a>
                <a class="nav-item nav-link" href="#">Log in</a>
            </div>
        </div>
    </nav>
    <br/>

    <!--Start main body-->
    <div>
      <div>
      <div class="tg-wrap"><table class="tg" style="undefined;table-layout: fixed; width: 331px">
        <colgroup>
        <col style="width: 54px">
        <col style="width: 128px">
        <col style="width: 149px">
        <col style="width: 149px">
        </colgroup>
          <tr>
            <th class="tg-yw4l">Product</th>
            <th class="tg-baqh">Product Description</th>
            <th class="tg-baqh">Price</th>
            <th class="tg-baqh">Seller</th>
          </tr>
          <?php
     
               while ($row = mysqli_fetch_array($query)) {
                   echo "<tr>";
                   echo "<td>".$row['product']."</td>";
                   echo "<td>".$row['product_desc']."</td>";
                   echo "<td>".$row['product_price']."</td>";
                   echo "<td>".$row['username']."</td>";
                   echo "</tr>";
               }
            ?>
        </table>
      </div>
    </div>




        
        
        
        
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
