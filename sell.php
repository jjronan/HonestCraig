<?php

// Initialize the session
session_start();

// If session variable is not set it will redirect to login page

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

  header("location: login.php");

  exit;

}

?>


<!DOCTYPE html>

<html lang="en">



  <head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>Popped</title>



    <!-- Bootstrap core CSS -->

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->

    <link href="css/3-col-portfolio.css" rel="stylesheet">



  </head>



  <body>



    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

      <div class="container">

        <a class="navbar-brand" href="#"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="navbar-nav ml-auto">

            <li class="nav-item active">

              <a class="nav-link" href="index.php">Home

                <span class="sr-only">(current)</span>

              </a>

            <li class="nav-item">

              <a class="nav-link" href="account.php">Account</a>

            </li>

          </ul>

        </div>

      </div>

    </nav>



    <!-- Page Content -->

    <div class="container">


      <!-- Page Heading -->

      <h1>What are we selling today?</h1>

            <form action="confirmation.php" method="post">
            <h3>Category:
              <select name="category">
                <option value="Aquatics">Aquatics</option>
                <option value="Auto">Auto</option>
                <option value="Home">Home</option>
              </select>
            </h3>
            <h3>Product Name:
              <input type="text" name="product_name">
            </h3>
            <h3>Product Description:</h3>
              <textarea name="description" rows="5" cols="30"></textarea>
              <br>
              <h3>Product Price:
              <input type="text" name="price">
            </h3>
            <input type="submit">


            </form>

        </form>

      

    </div>

    <!-- Footer -->

    <footer class="py-5 bg-dark">

      <div class="container">

        <p class="m-0 text-center text-white">Copyrighted by Popped!<sup>&copy;</sup></p>

        <p class="m-0 text-center text-white">Logged in as: <?php echo htmlspecialchars($_SESSION['username']); ?></p>

        <p align="center"><a href="logout.php" class="btn btn-danger">Sign Out</a></p>

      </div>

      <!-- /.container -->

    </footer>



    <!-- Bootstrap core JavaScript -->

    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  </body>



</html>

