<?php
   include '../session.php';
 
?>

<!-- khwhdkjhkjnhfkjnhkjwhfkhkjrhbfkbfmvjbhkb jk  -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sell || Bison</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="../img/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/util1.css">
  <link rel="stylesheet" type="text/css" href="../css/main1.css">
<!--===============================================================================================-->
 <!-- Bootstrap core CSS -->
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
              <a class="nav-link" href="found.php">found
              <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="lostit.php">lost</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>







  <div class="container-contact100">
    <div class="wrap-contact100">


      <form action="" method="post" class="contact100-form validate-form" enctype="multipart/form-data">
        <span class="contact100-form-title">
           Found
        </span>

        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
          <span class="label-input100">name of the thing *</span>
          <input class="input100" type="text" name="fname" placeholder="Enter Name of the thing" required="required">
        </div>

       
        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
          <span class="label-input100">Image</span>
          <input class="input100" type="file" name="image" required="required">
        </div>

        

        <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
          <span class="label-input100">Description</span>
          <textarea class="input100" name="info" placeholder="Your description here..." required="required"></textarea>
        </div>

        <div class="container-contact100-form-btn">
          <button type="submit" name="submit" class="contact100-form-btn">
            <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
            </form>
          
        <div class="container-contact100-form-btn">
          <button onclick="location.href='../home.php'" name="back"  class="contact100-form-btn">
            <span>
              Back
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
  
      
    </div>
  </div>


<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>








<!--  jkljcl;jlikloyhfukehgybyfkuyhgkujwghjkcmrgkgylukr  -->




  




<?php
// fname image info

if (isset($_POST['submit'])) {
    
      $dbf = mysqli_connect("Localhost","root","","lost_found_data");
      
      $fname = mysqli_real_escape_string($dbf,$_POST['fname']);
      $info = mysqli_real_escape_string($dbf,$_POST['info']);
      $file = $_FILES['image'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
     $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

     $user =  $_SESSION['login_user'];
      $em = $_SESSION['email'];

      $fm = mysqli_connect("Localhost","root","","BisonUsers");
      $fmq = "SELECT mobileno from busers where uname like '$user'";
      $fmr = mysqli_query($fm,$fmq);
      $fmi = mysqli_fetch_array($fmr,MYSQLI_ASSOC);
      $fmc = mysqli_num_rows($fmr);

      if($fmc == 1) {

         $mobno = $fmi['mobileno'];
        
        
      }else {
        echo "U dont have a phone number in your profile";
        header("Location : ../home.php");      }


    $allowed = array('jpg','jpeg','png');

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize <= 200000000) {

             $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));

             $sqli = "insert into lfdata(fname,place,personname,mobno,image,email)values('$fname','$info','$user','$mobno','$img','$em');";
             mysqli_query($dbf,$sqli);
             echo "upload success";

 

           }
           else
        {
          echo "your file is too big!";
        }
     }
     else
      {
            echo "There was an error uploading your file";
           
            if ($fileError==2) {
              echo "<h3> The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.</h3>";
            }
            elseif ($fileError==3) {
              echo "<h2> The uploaded file was only partially uploaded.</h2>";
            }
            elseif ($fileError==1) {
              echo "<h2>FUCKKKKK The uploaded file was only partially uploaded.</h2>";
            }
      }
   }
    else
    {
      echo "Cant upload a file of this type";
    }




 }    



?>


