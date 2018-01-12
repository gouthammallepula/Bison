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
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="" method="post" class="contact100-form validate-form" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Sell
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Product name *</span>
					<input class="input100" type="text" name="pname" placeholder="Enter Your product Name" required="required">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Cost *</span>
					<input class="input100" type="text" name="cost" placeholder="Enter the cost " value="Free" required="required">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
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





</body>
</html>








<!--  jkljcl;jlikloyhfukehgybyfkuyhgkujwghjkcmrgkgylukr  -->




	




<?php


    

if (isset($_POST['submit'])) {

//	ini_set('post_max_size','20M');

    $db = mysqli_connect("Localhost","root","","BisonUsers");
  
  	$pname = mysqli_real_escape_string($db,$_POST['pname']);
  
  	$info = mysqli_real_escape_string($db,$_POST['info']);

  	$cost = mysqli_real_escape_string($db,$_POST['cost']);
  		//$username is included here
  	$user =  $_SESSION['login_user'];
  	
  	$sql = "SELECT mobileno from busers where uname like '$user'";
  	$result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
     $count = mysqli_num_rows($result);
		
      if($count == 1) {

      	 $mobno = $row['mobileno'];
      	
        
      }else {
        echo "U dont have a phone number in your profile";      }

      //image uploading process
    $file = $_FILES['image'];
    
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    

  

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

  



    $allowed = array('jpg','jpeg','png');

    if (in_array($fileActualExt, $allowed)) {
    	if ($fileError === 0) {
    		if ($fileSize <= 200000000) {

             $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));


     //now lets save these images into our project folders

    			$fileNameNew = uniqid('',true).".".$fileActualExt;
    			$fileDestination = '../img/'.$fileNameNew;
    			
                
                    $em = $_SESSION['email'];

    			// $file $pname $user  $mobno   $info
     // these are the files to be sent to database
     $sq = "insert into sbusers(image,pname,username,mobno,info,cost,email)values('$img','$pname','$user','$mobno','$info','$cost','$em')";
     //connect to the database
     $dbe = mysqli_connect("Localhost","root","","e_com") or die(mysql_error());
     //submitted data is ...
     //$pname - product name   $file - image of product 
     //$info - description of the product $user - name of the user
     //$mobno - mobile number of the user

     //below line will submit data into database....
     mysqli_query($dbe,$sq);


    			

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


</body>
</html>