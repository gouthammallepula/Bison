<?php
   include '../session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/styleprev.css" rel="stylesheet">
    <script src="../vendor/jquery/jquery.min.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            
            <ul class="sidebar-nav">
                <div style="height: 60px;"></div>
                <li class="sidebar-brand">

                    <a href="#">
                        Previous papers
                    </a>
                </li>
                <li>
                     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">CSE</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>
                </li>
                <li>
                    <a href="#">ECE</a>
                </li>
                <li>
                    <a href="#">IT</a>
                </li>
                <li>
                    <a href="#">MECH</a>
                </li>
                <li>
                    <a href="#">CIVIL</a>
                </li>
                <li>
                    <a href="#">EEE</a>
                </li>
                <li>
                    <a href="#">BME</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->



        <!-- Page Content -->
        <div id="page-content-wrapper">

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


<div style="height: 60px;"></div>

            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>