<?php
  include "dbconnect.php";
  session_start();
  if (isset($_POST['submit'])) {
  	$username = mysqli_real_escape_string($conn,$_POST['username']);
  	$password = mysqli_real_escape_string($conn,$_POST['password']);
  	$sql = "SELECT uid FROM busers where htno = '$username' or uname = '$username' and pass = '$password'";
  	$result = mysqli_query($conn,$sql);
  	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  	$active = $row['active'];
    $sq = "SELECT * FROM busers where htno = '$username' or uname = '$username' and pass = '$password'";
    $res = mysqli_query($conn,$sq);
    $rowres = mysqli_fetch_array($res,MYSQLI_ASSOC);
    $active = $rowres['active'];



      
      $count = mysqli_num_rows($result);
      $count1 = mysqli_num_rows($res);
       if($count1 == 1) {
         
         $_SESSION['email'] = $rowres['email'];
         $_SESSION['lname'] = $rowres['lname'];
         $_SESSION['uname'] = $rowres['uname'];
         $_SESSION['htno'] = $rowres['htno'];
         $_SESSION['sec'] = $rowres['sec'];
    
      }
		
      if($count == 1) {
         $_SESSION['username'] = '$username';
         $_SESSION['login_user'] = $username;
    

         
         header("location: home.php?success");
      }else {
         $error = "invalid login details...";
         echo $error;
      }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bison</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="img/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


  <div class="container-contact100">
    <div class="wrap-contact100">
      <form method="POST" class="contact100-form validate-form" action="">
        <span class="contact100-form-title">
          Say Hello!
        </span>

        <div class="wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Your Name</span>
          <input class="input100" type="text" name="username" placeholder="Enter your name">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Password</span>
          <input class="input100" type="password" name="password" placeholder="Enter your password">
          <span class="focus-input100"></span>
        </div>

        

       

        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <button name="submit" type="submit" class="contact100-form-btn">
              <span>
                Submit
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>



  <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
