<?php
   include 'session.php';
   $rex = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util1.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style1.css" rel="stylesheet">
</head>
<body>



       <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home.php"><?php  echo $_SESSION['login_user'];   ?></a>
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
              <a class="nav-link" href="ecom/buy.php">buy</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="ecom/found.php">found</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="ecom/lostit.php">lost</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

     
</div>
<!--        php code starts here     -->
<?php  

    // coonecting to database
 $con = mysqli_connect("Localhost","root","","profile");
 //username 
 $us = $_SESSION['login_user'];
//previous data
    $sq = "select * from profile where uname LIKE '$us';";
    $result = mysqli_query($con,$sq);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $_SESSION['about'] = $row['about'];

// previous data is stored in $row 

if (isset($_POST['submit'])) {




 //declaring variables or collecting data
 //about data
 $about = mysqli_real_escape_string($con,$_POST['abouti']);
 //experience
 $role1 = mysqli_real_escape_string($con,$_POST['role1']);
 $com1 = mysqli_real_escape_string($con,$_POST['com1']);
 $abw1 = mysqli_real_escape_string($con,$_POST['abw1']);
 $ye1 = mysqli_real_escape_string($con,$_POST['ye1']);

 $role2 = mysqli_real_escape_string($con,$_POST['role2']);
 $com2 = mysqli_real_escape_string($con,$_POST['com2']);
 $abw2 = mysqli_real_escape_string($con,$_POST['abw2']);
 $ye2 = mysqli_real_escape_string($con,$_POST['ye2']);

 $role3 = mysqli_real_escape_string($con,$_POST['role3']);
 $com3 = mysqli_real_escape_string($con,$_POST['com3']);
 $abw3 = mysqli_real_escape_string($con,$_POST['abw3']);
 $ye3 = mysqli_real_escape_string($con,$_POST['ye3']);

 $role4 = mysqli_real_escape_string($con,$_POST['role4']);
 $com4 = mysqli_real_escape_string($con,$_POST['com4']);
 $abw4 = mysqli_real_escape_string($con,$_POST['abw4']);
 $ye4 = mysqli_real_escape_string($con,$_POST['ye4']);

 //education 
 $ins1 = mysqli_real_escape_string($con,$_POST['ins1']);
 $deg1 = mysqli_real_escape_string($con,$_POST['deg1']);
 $cgpa1 = mysqli_real_escape_string($con,$_POST['cgpa1']);
 $year1 = mysqli_real_escape_string($con,$_POST['year1']);

 $ins2 = mysqli_real_escape_string($con,$_POST['ins2']);
 $deg2 = mysqli_real_escape_string($con,$_POST['deg2']);
 $cgpa2 = mysqli_real_escape_string($con,$_POST['cgpa2']);
 $year2 = mysqli_real_escape_string($con,$_POST['year2']);

 $ins3 = mysqli_real_escape_string($con,$_POST['ins1']);
 $deg3 = mysqli_real_escape_string($con,$_POST['deg1']);
 $cgpa3 = mysqli_real_escape_string($con,$_POST['cgpa1']);
 $year3 = mysqli_real_escape_string($con,$_POST['year1']);

 //skills
 $skillname = mysqli_real_escape_string($con,$_POST['skillname']);
 $wf1 = mysqli_real_escape_string($con,$_POST['wf1']);
 $wf2 = mysqli_real_escape_string($con,$_POST['wf2']);
 $wf3 = mysqli_real_escape_string($con,$_POST['wf3']);
 $wf4 = mysqli_real_escape_string($con,$_POST['wf4']);

 //interests
 $interests = mysqli_real_escape_string($con,$_POST['interests']);

 //awards
 $aw1 = mysqli_real_escape_string($con,$_POST['aw1']);
 $aw2 = mysqli_real_escape_string($con,$_POST['aw2']);
 $aw3 = mysqli_real_escape_string($con,$_POST['aw3']);
 $aw4 = mysqli_real_escape_string($con,$_POST['aw4']);
 $aw5 = mysqli_real_escape_string($con,$_POST['aw5']);
 $aw6 = mysqli_real_escape_string($con,$_POST['aw6']);
 $aw7 = mysqli_real_escape_string($con,$_POST['aw7']);

 //facebook
 $fb = mysqli_real_escape_string($con,$_POST['fb']);
 //twitter
 $twi = mysqli_real_escape_string($con,$_POST['twi']);
 //linked-in
 $lin = mysqli_real_escape_string($con,$_POST['lin']);
 //github
 $git = mysqli_real_escape_string($con,$_POST['git']);

 //address
 $address = mysqli_real_escape_string($con,$_POST['address']);
 


 //image data
 /*   $file = $_FILES['image'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));*/

 // writing queries for database


 $sql = "UPDATE profile
SET address = '$address', about = '$about' , interests = '$interests' , role1 = '$role1' , com1 = '$com1' , abw1 = '$abw1' , ye1 = '$ye1' , role2 = '$role2' , com2 = '$com2' , abw2 = '$abw2' , ye2 = '$ye2' , role3 = '$role3' , com3 = '$com3' , abw3 = '$abw3' , ye3 = '$ye3' , role4 = '$role4' , com4 = '$com4' , abw4 = '$abw4' , ye4 = '$ye4' , ins1 = '$ins1' , deg1 ='$deg1' , cgpa1 = '$cgpa1' , year1 = '$year1' , ins2 = '$ins2' , deg2 = '$deg2' , cgpa2 = '$cgpa2' , year2 = '$year2' , ins3 = '$ins3' , deg3 = '$deg3' , cgpa3 = '$cgpa3' ,year3 = '$year3' , skillname = '$skillname' , wf1 = '$wf1' , wf2 = '$wf2' , wf3 = '$wf3' , wf4 = '$wf4' , aw1 = '$aw1' , aw2 = '$aw2' , aw3 = '$aw3' , aw4 = '$aw4' , aw5 = '$aw5' , aw6 = '$aw6' , aw7 = '$aw7' , fb = '$fb' , twi = '$twi' , lin = '$lin' , git = '$git'
WHERE uname = '$us';";

 $rex = mysqli_query($con,$sql);
 

 






}
?>
<!--        php code ends here     -->
<div>
  <?php 
   if ($rex==1) {
           echo  '<div class="container-contact100-form-btn">';?>
					<button onclick="window.location='profile.php'" name="back"  class="contact100-form-btn">
				<?php 	echo '	<span>
							Saved Successful - Lets Go Back
							
						</span>
					</button>
				</div>';
 }
?>
  </div>


	<div class="container-contact100">
		<div class="wrap-contact100">

			<form action="" method="post" class="contact100-form validate-form" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Edit-Profile
				</span>
                
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">ABOUT *</span>
					<textarea class="input100" name="abouti" placeholder="something about yourself"><?php echo $row['about']; ?></textarea>
					
				</div>
                
				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Experience *</span>
					<input class="input100" type="text" name="role1" value="<?php echo $row['role1']; ?>" placeholder="Your role.." >
					<input class="input100" type="text" name="com1" placeholder="company name" value="<?php echo $row['com1']; ?>" >
					<input class="input100" type="text" name="ye1" value="<?php echo $row['ye1']; ?>" placeholder="start year - final year" >
					<textarea class="input100" name="abw1" placeholder="something about your work"><?php echo $row['abw1']; ?></textarea>

					<input class="input100" type="text" name="role2" placeholder="Your role.." value="<?php echo $row['role2']; ?>" >
					<input class="input100" type="text" name="com2" placeholder="company name" value="<?php echo $row['com2']; ?>" >
					<input class="input100" type="text" name="ye2" value="<?php echo $row['ye2']; ?>" placeholder="start year - final year" >
					<textarea class="input100" name="abw2" placeholder="something about your work"><?php echo $row['abw2']; ?></textarea>

					<input class="input100" type="text" name="role3" placeholder="Your role.." value="<?php echo $row['role3']; ?>" >
					<input class="input100" type="text" name="com3" placeholder="company name" value="<?php echo $row['com3']; ?>" >
					<input class="input100" type="text" name="ye3" value="<?php echo $row['ye3']; ?>" placeholder="start year - final year" >
					<textarea class="input100" name="abw3" placeholder="something about your work"><?php echo $row['abw3']; ?></textarea>

					<input class="input100" type="text" name="role4" placeholder="Your role.." value="<?php echo $row['role4']; ?>" >
					<input class="input100" type="text" name="com4" placeholder="company name" value="<?php echo $row['com4']; ?>" >
					<input class="input100" type="text" name="ye4" value="<?php echo $row['ye4']; ?>" placeholder="start year - final year" >
					<textarea class="input100" name="abw4" placeholder="something about your work"><?php echo $row['abw4']; ?></textarea>
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Education *</span>
					<input class="input100" type="text" name="ins1" placeholder="Name of Institute" value="<?php echo $row['ins1']; ?>" >
					<input class="input100" type="text" name="deg1" placeholder="Name of  Degree" value="<?php echo $row['deg1']; ?>" >
					<input class="input100" type="text" name="cgpa1" placeholder="CGPA :" value="<?php echo $row['cgpa1']; ?>" >
					<input class="input100" type="text" name="year1" placeholder="start-year - final-year :" value="<?php echo $row['year1']; ?>" ><br>
					<input class="input100" type="text" name="ins2" placeholder="Name of Institute" value="<?php echo $row['ins2']; ?>" >
					<input class="input100" type="text" name="deg2" placeholder="Name of  Degree" value="<?php echo $row['deg2']; ?>" >
					<input class="input100" type="text" name="cgpa2" placeholder="CGPA :" value="<?php echo $row['cgpa2']; ?>" >
					<input class="input100" type="text" name="year2"  placeholder="start-year - final-year :" value="<?php echo $row['year2']; ?>" ><br>
					<input class="input100" type="text" name="ins3" placeholder="Name of Institute" value="<?php echo $row['ins3']; ?>" >
					<input class="input100" type="text" name="deg3" placeholder="Name of  Degree" value="<?php echo $row['deg3']; ?>" >
					<input class="input100" type="text" name="cgpa3" placeholder="CGPA :" value="<?php echo $row['cgpa3']; ?>" >
					<input class="input100" type="text" name="year3"  placeholder="start-year - final-year :" value="<?php echo $row['year3']; ?>" >
				</div>
      
               <div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Skills *</span>
					<input class="input100" type="text" name="skillname" placeholder="Niche" value="<?php echo $row['skillname']; ?>" >

					<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">WORKFLOW *</span>


					<input class="input100" type="text" name="wf1" placeholder="Capable of" value="<?php echo $row['wf1']; ?>" >
					<input class="input100" type="text" name="wf2" placeholder="Capable of" value="<?php echo $row['wf2']; ?>" >
					<input class="input100" type="text" name="wf3" placeholder="Capable of" value="<?php echo $row['wf3']; ?>" >
					<input class="input100" type="text" name="wf4" placeholder="Capable of" value="<?php echo $row['wf4']; ?>" ><br>
				</div>
					
				</div>
                
                <div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">INTERESTS *</span>
					<textarea class="input100" name="interests" placeholder="write about your interests"><?php echo $row['interests']; ?></textarea>
				</div>
				

				

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Awards *</span>
                    <input class="input100" type="text" name="aw1" placeholder="write about your Award" value="<?php echo $row['aw1']; ?>" >
					<input class="input100" type="text" name="aw2" placeholder="write about your Award" value="<?php echo $row['aw2']; ?>" >
					<input class="input100" type="text" name="aw3" placeholder="write about your Award" value="<?php echo $row['aw3']; ?>" >
					<input class="input100" type="text" name="aw4" placeholder="write about your Award" value="<?php echo $row['aw4']; ?>" >
					<input class="input100" type="text" name="aw5" placeholder="write about your Award" value="<?php echo $row['aw5']; ?>" >
					<input class="input100" type="text" name="aw6" placeholder="write about your Award" value="<?php echo $row['aw6']; ?>" >
					<input class="input100" type="text" name="aw7" placeholder="write about your Award" value="<?php echo $row['aw7']; ?>" >


				</div>

				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Facebook *</span>
					<input class="input100" type="text" name="fb" placeholder="Your FB Link Here" value="<?php echo $row['fb']; ?>" >
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Twitter *</span>
					<input class="input100" type="text" name="twi" placeholder="Your Twitter Link Here" value="<?php echo $row['twi']; ?>" >
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Linked-in *</span>
					<input class="input100" type="text" name="lin" placeholder="Your LINKED-IN Link Here" value="<?php echo $row['lin']; ?>" >
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Github *</span>
					<input class="input100" type="text" name="git" placeholder="Your GITHUB Link Here" value="<?php echo $row['git']; ?>" >
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">ADDRESS *</span>
					<textarea class="input100" name="address" placeholder="Your ADDRESS Here"><?php echo $row['address']; ?></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<button data-toggle="modal" data-target="#myModal" type="submit" name="submit" class="contact100-form-btn">
						<span>
							Save
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
						</form>
					
				<div class="container-contact100-form-btn">
					<button onclick="location.href='profile.php'" name="back"  class="contact100-form-btn">
						<span>
							Back
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
	
			
		</div>
	</div>


<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>
