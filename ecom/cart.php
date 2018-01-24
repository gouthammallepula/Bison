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

    <title>Cart || Bison</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
      #top
      {
        margin-left: 10px;
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

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
          <img class="img-fluid rounded" src="../img/cart.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h1>A CART FULL OF HAPPINESS!!</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <a class="btn btn-primary btn-lg" href="sell.php">Start Selling!</a>
          <a id="top" class="btn btn-primary btn-lg" href="buy.php?page=1">Start Buying!</a>
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->
      <!-- cart items -->
     <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">your ADD TO CART content</p>
        </div>
      </div>
      <div id="cartcontent">
        <?php


          $uy = $_SESSION['htno'];
         
          $con = mysqli_connect("Localhost","root","","cart");

          //pagination algorithm


  $pagem = $_GET['pagek'];


  if ($pagem == "" || $pagem == "1") {
    $page3 = 0;
  }
  else
  {
    $page3 = ($_GET['pagek']*4)-4;
  }

          $qu = "select * from cart where bname LIKE '$uy' ORDER BY sno DESC limit $page3,4;";

          $rem = mysqli_query($con,$qu);

          if (isset($_POST['su'])) {
      $numt = $_POST['iuy'];

      $q = "DELETE FROM cart WHERE sno = '$numt'";

      $ch = mysqli_query($con,$q);

      if ($ch==1) {
           include '../ope/delbuy.php';
      }

}

          $cm = mysqli_num_rows($rem);

          if($cm > 0)
          {
             echo ' <div class="row">';
              while ($roast = mysqli_fetch_array($rem))
               {
                $numd = $roast['uniqueid'];
                $unit = $roast['sno'];
                    echo '
                <div id="marbot" class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">';

           ?>
          <?php 
             $dbp = mysqli_connect("Localhost","root","","e_com");
        $qer = "SELECT * FROM sbusers where pid LIKE '$numd'";
        $dest = mysqli_query($dbp,$qer);
        $desti = mysqli_fetch_array($dest);


          ?>
           <?php


           echo '<a href="#"> <img src="data:image/jpeg/jpg/png;base64,'.base64_encode($desti['image']).'"height="40%" width="100%" /></a>';
            echo '
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">'.$roast['pname'].' - '.$roast['cost'].'/₹</a>
              </h4>
         <a href="#">'.$roast['username'].'</a><br>'.$roast['htno'].'<br>+91'.$roast['mobno'].'<br><small>'.$roast['email'].'</small>';

            
             
      echo '
              <p class="card-text">'.$roast['des'].'</p>
              <center>
              <form method="post" action="" >
              <input name="iuy" type="hidden" value="'.$unit.'">
                <button href="#form-anchor" type="submit" name="su" class="btn btn-primary">Delete</button>
                </form>
              </center>
            </div>
          </div>
        </div>
        ';


              }echo "</div>";


          }
          else
          {
            echo "<h5>You didn't added anything...</h5>";
          }





        ?>

        </div>

        <!--      pagination for cart things          -->
<?php 
  
    $datm = "select * from cart where bname LIKE '$uy' ORDER BY sno DESC;";
    $resk = mysqli_query($con,$datm);
    $cp = mysqli_num_rows($resk);
    $ap = $cp / 4;
    $ap = ceil($ap);

   echo '
           <ul id="pg" class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="cart.php?pagec=1&page=1&pagek=1" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
   ';
  
    for ($bp = 1; $bp <= $ap ; $bp++) { 


        ?> 

         <li class="page-item">
          <a class="page-link" href="cart.php?page=1&pagec=1&pagek=<?php echo $bp; ?>"><?php  echo $bp; ?></a>
         </li>

        

        <?php
    }    

   ?>
<li class="page-item">
          <a class="page-link" href="cart.php?page=1&pagec=1&pagek=<?php if($ap==0){echo $ap+1;}else{ echo $ap;} ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>

   </ul>



<!--               end of pagination                     -->



      

      <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body" id="form-anchor">
          <p class="text-white m-0">your content for Selling</p>
        </div>
      </div>
<div id="buycontent">
  <?php         
         $us = $_SESSION['login_user'];
          
       //connecting to database
  $dbp = mysqli_connect("Localhost","root","","e_com");

  //pagination algorithm


  $pagei = $_GET['page'];


  if ($pagei == "" || $pagei == "1") {
    $page1 = 0;
  }
  else
  {
    $page1 = ($_GET['page']*4)-4;
  }

  //selecting data from tables
  $data = "select *from sbusers where username LIKE '$us' ORDER BY pid DESC limit $page1,4;";

  $resultinf = mysqli_query($dbp,$data);
  
if (isset($_POST['subm'])) {
      $numi = $_POST['idm'];

      $q = "DELETE FROM sbusers WHERE pid = '$numi'";

      $ch = mysqli_query($dbp,$q);

      if ($ch==1) {
           include '../ope/delbuy.php';
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
                <a href="#"> <img src="data:image/jpeg/jpg/png;base64,'.base64_encode($row['image']).'"height="40%" width="100%" /></a>';
            echo '
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">'.$row['pname'].' - '.$row['cost'].'/₹</a>
              </h4>
         <a href="#">'.$row['username'].'</a><br>'.$row['htno'].'<br>+91'.$row['mobno'].'<br><small>'.$row['email'].'</small>';

            
             
      echo '
              <p class="card-text">'.$row['info'].'</p>
              <center>
              <form method="post" action="">
              <input name="idm" type="hidden" value="'.$uni.'">
                <button type="submit" name="subm" class="btn btn-primary">Delete</button>
                </form>
              </center>
            </div>
          </div>
        </div>
        ';

  }echo "</div>";

             }else
             {
               echo "<h5> You Didn't Posted Anything....</h5>";
             }
?>

<!--      pagination for sell things          -->
<?php 
  
    $dat = "select *from sbusers where username LIKE '$us' ORDER BY pid DESC;";
    $res = mysqli_query($dbp,$dat);
    $c = mysqli_num_rows($res);
    $a = $c / 4;
    $a = ceil($a);

   echo '
           <ul id="pg" class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="cart.php?pagec=1&page=1" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
   ';
  
    for ($b = 1; $b <= $a ; $b++) { 


        ?> 

         <li class="page-item">
          <a class="page-link" href="cart.php?pagec=1&page=<?php echo $b; ?>"><?php  echo $b; ?></a>
         </li>

        

        <?php
    }    

   ?>
<li class="page-item">
          <a class="page-link" href="cart.php?pagec=1&page=<?php if($a==0){echo $a+1;}else{ echo $a;} ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>

   </ul>



<!--               end of pagination                     -->
</div>
      <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p id="ht" class="text-white m-0">your content for Lost Things</p>

        </div>
      </div>
  
<div id="lostcontent">
 <?php         

          $us = $_SESSION['login_user'];
       //connecting to database
  $dbp = mysqli_connect("Localhost","root","","lost_found_data");

  //pagination algorithm
  

  $pagein = $_GET['pagec'];


  if ($pagein == "" || $pagein == "1") {
    $page2 = 0;
  }
  else
  {
    $page2 = ($_GET['pagec']*4)-4;
  }

  //selecting data from tables
  $data = "select *from lfdata where personname LIKE '$us' ORDER BY sno DESC limit $page2,4;";

  $resultinf = mysqli_query($dbp,$data);

if (isset($_POST['sub'])) {
   $con = mysqli_connect("Localhost","root","","lost_found_data");
   $num = $_POST['id'];
   $query = "DELETE FROM lfdata WHERE sno = '$num'";
   $res = mysqli_query($con,$query);
   if ($res==1) {
   
         include '../ope/delbuy.php';
    

   }
}

  

     $count = mysqli_num_rows($resultinf);
            
             if ($count > 0) {

                            echo ' <div class="row">
        ';

            while ($row = mysqli_fetch_array($resultinf)) {
        
              // for image....
              $uniq = $row['sno'];
            
              echo '
                <div id="marbot" class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">

        
                <a href="#"> <img src="data:image/jpeg/jpg/png;base64,'.base64_encode($row['image']).'"height="100%" width="100%" /></a>';
            echo '
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">'.$row['fname'].'</a>
              </h4>
         <a href="#">'.$row['personname'].'</a><br>'.$row['htno'].'<br>+91'.$row['mobno'].'<br><small>'.$row['email'].'</small>';

            
             
      echo '
              <p class="card-text">'.$row['place'].'</p>
               <center>
               <form method="post" action="" >
                 <input name="id" type="hidden" value="'.$uniq.'">
                <button type="submit" name="sub" class="btn btn-primary">Delete</button>
                </form>
              </center>
            </div>
          </div>
          
        </div>
        ';
 

  }echo "</div>";

             }else{
             echo "<h5> You Didn't Posted Anything....</h5>";
           }
?>

</div>


    </div>
    <!-- /.container -->

<?php 
    $db = mysqli_connect("Localhost","root","","lost_found_data");
    $dati = "select *from lfdata where personname LIKE '$us' ORDER BY sno DESC;";
    $rest = mysqli_query($db,$dati);
    $k = mysqli_num_rows($rest);             //c=k , a=y b=n
    $y = $k / 4;
    $y = ceil($y);

   echo '
           <ul id="pg" class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="cart.php?pagec=1&page=1" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
   ';
  
    for ($n = 1; $n <= $y ; $n++) { 


        ?> 

         <li class="page-item">
          <a class="page-link" href="cart.php?page=1&pagec=<?php echo $n; ?>"><?php  echo $n; ?></a>
         </li>

        

        <?php
    }    

   ?>
<li class="page-item">                                        
          <a class="page-link" href="cart.php?page=1&pagec=<?php if($y==0){echo $y+1;}else{ echo $y;} ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>

   </ul>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    

  </body>

</html>
