<?php
   include '../session.php';
?>
<!DOCTYPE html>
<html>

  <head>
    <link rel="icon" type="image/png" href="../img/icons/favicon.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>buy | Bison</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Custom styles for this template -->
     <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/shop-item.css" rel="stylesheet">

  </head>

  <body>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../home.php"><?php  echo $_SESSION['login_user'];   ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../home.php">Home
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sell.php">sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buy.php">buy</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="found.php">found</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="lostit.php">lost
              <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
       <div style="height: 40px;"></div>
        <h1 class="my-4">found
        <small>/ here</small>
      </h1>

 <?php         

          
       //connecting to database
  $dbp = mysqli_connect("Localhost","root","","lost_found_data");

  //selecting data from tables
  $data = "select *from lfdata;";

  $resultinf = mysqli_query($dbp,$data);

  
     $count = mysqli_num_rows($resultinf);
            
             if ($count > 0) {

                      		  echo ' <div class="row">
        ';

          	while ($row = mysqli_fetch_array($resultinf)) {
        
          		// for image....
              echo '
                <div id="marbot" class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
                <a href="#"> <img src="data:image/jpeg/jpg/png;base64,'.base64_encode($row['image']).'"height="40%" width="100%" /></a>';
            echo '
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">'.$row['fname'].'</a>
              </h4>
         <a href="#">'.$row['personname'].'</a><br>+91'.$row['mobno'].'<br><small>'.$_SESSION['email'].'</small>';

            
             
      echo '
              <p class="card-text">'.$row['place'].'</p>

            </div>
          </div>
        </div>
        ';

  }echo "</div>";

             }
?>
     
      <!-- /.row -->
<div style="height: 30px;"> </div>
      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Bison 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
   
   
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
