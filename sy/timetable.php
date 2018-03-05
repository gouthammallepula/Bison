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

    <title>TimeTable</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Custom styles for this template -->
     <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style1.css" rel="stylesheet">
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 

  </head>
</head>
<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="../home.php">
        <span class="d-block d-lg-none"><?php echo $_SESSION['uname'];   ?></span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="profile.jpg" alt="">
        </span>
      </a>
      <div style="height: 50px;"></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../home.php">Home
                
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../ecom/sell.php">sell</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../ecom/buy.php?page=1">buy</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../ecom/found.php">found</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../ecom/lostit.php?page=1">lost</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">logout</a>
            </li>
          
        
         
        </ul>
      </div>
    </nav>
 
     <div class="container-fluid p-0">
         
         <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0"> <?php echo $_SESSION['uname'];   ?>
            <span class="text-primary"> <?php echo $_SESSION['lname']; ?> / </span>...<h1 class="mb-0"> <?php $s = $_SESSION['sec']; echo strtoupper($s) ?>   </h1>
          </h1>
          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
              <h3 class="card-title">Product Name</h3>
              <h4>$24.99</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
              
            </div>
          </div>
         
          
        </div>
      </section>


     

  </div>


</body>
</html>