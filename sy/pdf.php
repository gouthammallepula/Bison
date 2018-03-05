<?php
   include '../session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <head>
  	<link rel="icon" type="image/png" href="../img/icons/favicon.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style1.css" rel="stylesheet">

    <title>Home</title>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <link href="../css/style.css" rel="stylesheet">
    
  </head>

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

     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
         <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        

<a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-register">Launch modal</a>
        
        <!-- MODAL -->
        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-register-label">Sign up now</h3>
                <p>Fill in the form below to get instant access:</p>
              </div>
              
              <div class="modal-body">
                
                      <form role="form" action="" method="post" class="registration-form">
                        <div class="form-group">
                          <label class="sr-only" for="form-first-name">First name</label>
                            <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-last-name">Last name</label>
                            <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-about-yourself">About yourself</label>
                            <textarea name="form-about-yourself" placeholder="About yourself..." 
                                  class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                          </div>
                          <button type="submit" class="btn">Sign me up!</button>
                      </form>
                      
              </div>
              
            </div>
          </div>
        </div>


</body>
</html>