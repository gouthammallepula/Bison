<?php
   include '../session.php';

?>



<!-- starting here .......
 ........................
       ...............................
.....................................
	.........................................  -->
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
    <link href="../css/style1.css" rel="stylesheet">

    <style type="text/css">
    #pg
      {
        position: absolute;
        right: 0;
        bottom: 100px;
        left: 0;

      }
      footer
      {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;

      }
      body
      {
          position: relative;
          padding-bottom: 6rem;
          min-height: 100%;
          margin: 0;
      }
      html
      {
        height: 100%;
        box-sizing: border-box;
      }
    </style>

  </head>

  <body>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../home.php"><?php  echo $_SESSION['uname'];   ?></a>
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
              <a class="nav-link" href="buy.php?page=1">buy
              <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="found.php">found</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="lostit.php?page=1">lost</a>
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
        <h1 class="my-4">Available
        <small>/ Sale</small>
      </h1>

 <?php         
   
          
       //connecting to database
  $dbp = mysqli_connect("Localhost","root","","e_com");
 //pagination algorithm


  $pagei = $_GET['page'];


  if ($pagei == "" || $pagei == "1") {
    $page1 = 0;
  }
  else
  {
    $page1 = ($_GET['page']*8)-8;
  }



  //selecting data from tables
  $data = "select *from sbusers ORDER BY pid DESC limit $page1,8;";

  $resultinf = mysqli_query($dbp,$data);

  if (isset($_POST['subm'])) {
      $numi = $_POST['idm'];
      


      $q = "select * FROM sbusers WHERE pid = '$numi';";

      $ch = mysqli_query($dbp,$q);

      $kim = mysqli_num_rows($ch);
      
      if ($kim > 0) {
            $roam = mysqli_fetch_array($ch);
           
             $bname = $_SESSION['htno'];
            
            $namep = $roam['pname'];
            $costp = $roam['cost'];
            $usern = $roam['username'];
            $mobo = $roam['mobno'];
            $deck = $roam['info'];
            $em = $roam['email'];
            $htn = $roam['htno'];

            
            $ken = mysqli_connect("Localhost","root","","cart");
            $qq = "insert into cart (pname,cost,username,mobno,email,des,bname,htno)values('$namep','$costp','$usern','$mobo','$em','$deck','$bname','$htn');";
            $chin = mysqli_query($ken,$qq);
            
             if ($chin == 1) {
                  echo "success";
             }
      }

      

}

  
     $count = mysqli_num_rows($resultinf);
            
             if ($count > 0) {

                      		  echo ' <div class="row">
        ';

          	while ($row = mysqli_fetch_array($resultinf)) {
              $uni = $row['pid'];
        
          		// for image....
              echo '
                <div id="marbot" class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
                <a href="#"> <img src="data:image/jpeg/jpg/png;base64,'.base64_encode($row['image']).'"height="100%" width="100%" /></a>';
            echo '
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">'.$row['pname'].' - '.$row['cost'].'/₹</a>
              </h4>
         <a href="#">'.$row['username'].'</a><br>'.$row['htno'].'<br>+91'.$row['mobno'].'<br><small>'.$_SESSION['email'].'</small>';

            
             
      echo '
              <p class="card-text">'.$row['info'].'</p>
              <center>';
              if ($row['htno']!=$_SESSION['htno']) {
                
             
              echo '
              <form method="post" action="">
                 <input type="hidden" name="idm" value="'.$uni.'">
                 <button href="#" name="subm" class="btn btn-primary">ADD TO CART</button>

              </form>';
               }

              echo '
               </center>
             
          
            </div>
          </div>
        </div>
        ';

  }echo "</div>";

             }
?>
     
      <!-- /.row -->

      <!-- Pagination -->
     

    </div>
    <!-- /.container -->
    <div style="height: 70px;"></div>
 
   <?php 
  
    $dat = "select *from sbusers ORDER BY pid DESC;";
    $res = mysqli_query($dbp,$dat);
    $c = mysqli_num_rows($res);
    $a = $c / 8;
    $a = ceil($a);

   echo '
           <ul id="pg" class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="buy.php?page=1" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
   ';
  
    for ($b = 1; $b <= $a ; $b++) { 


        ?> 

         <li class="page-item">
          <a class="page-link" href="buy.php?page=<?php echo $b; ?>"><?php  echo $b; ?></a>
         </li>

        

        <?php
    }

   ?>
<li class="page-item">
          <a class="page-link" href="buy.php?page=<?php if($a==0){echo $a+1;}else{ echo $a;} ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>

   </ul>

    </div>

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


