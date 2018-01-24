<?php
   include 'session.php';
?>


<!--     home starts here                  -->
<!DOCTYPE html>
<html lang="en">

  <head>
  	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style1.css" rel="stylesheet">

    <title>Home</title>

    <script src="vendor/jquery/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
    	#bt
    	{
    		margin-left: 5px;
    	}
      #bran
           {

           }
      @media (max-height: 30px) {
           #topspace
           {
            padding:0;
            margin:0;
           }
         }
         @media (max-width: 978px) {
           #bran
           {
              
           }
           #bt,#btn
      {
        font-size: 17px;
      }

       }


    </style>

<!--    width:253px;
  height:150px;           -->
  </head>

  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home.php"><?php  echo $_SESSION['uname'];   ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ecom/sell.php">sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ecom/buy.php?page=1">buy</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="ecom/found.php">found</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="ecom/lostit.php?page=1">lost</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="topspace"></div>
<div id="change">
     <div class="container">


      <header id="bran" class="jumbotron my-4">

        <h1 class="display-3">welcome <small><?php  echo $_SESSION['uname'];   ?>!!</small></h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <button id="btn" class="btn btn-primary btn-lg" onclick="window.location = 'profile.php'">Let's goto profile</button>
        <button id="bt" class="btn btn-primary btn-lg" onclick="window.location = 'ecom/cart.php?page=1&pagec=1&pagek=1'">OPEN CART</button>

      </header>


      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div onclick="window.location='sy/previous.php'" class="card">
            <img id="resize" style="height: 150px;" class="card-img-top" src="img/previous.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Previous papers</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="sy/previous.php" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div onclick="window.location='sy/pdf.php'" class="card">
            <img id="resize" style="height: 150px;" class="card-img-top" src="img/pdf.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Pdf's</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="sy/pdf.php" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img id="resize" style="height: 150px;" class="card-img-top" src="img/pro.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Projects</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
                 <img id="resize" style="height: 150px;" class="card-img-top" src="img/qb.jpg" alt="">
               <div class="card-body">
                   <h4 class="card-title">question banks</h4>
                   <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
               </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div onclick="window.location='sy/timetable.php'" class="card">
                 <img id="resize" style="height: 170px;" class="card-img-top" src="img/managei.jpg" alt="">
               <div class="card-body">
                   <h4 class="card-title">Time-table</h4>
                   <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
               </div>
                <div class="card-footer">
                    <a href="sy/timetable.php" class="btn btn-primary">Find Out More!</a>
                </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4">
          <div class="card">
                 <img id="resize" class="card-img-top" src="img/lecic.jpg" style="height: 250px;" alt="">
               <div class="card-body">
                   <h4 class="card-title">lecturer details</h4>
                   <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
               </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
                 <img style="height: 170px;" id="resize" class="card-img-top" src="img/sylic.jpg" alt="">
               <div class="card-body">
                   <h4 class="card-title">syllabus</h4>
                   <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
               </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
          </div>
        </div>

      </div>
    </div>



    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>

    </footer>

</div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
