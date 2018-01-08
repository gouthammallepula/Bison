<?php
   include '../session.php';
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bison-Buy|Sell</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://www.w3schools.com/lib/w3.js"></script>

</head>
<body>

	
<div class="w3-cell-row">
	  <div class="w3-container w3-black w3-cell"></div>
  <div class="w3-container w3-black w3-cell">
    <h1><a href="buysell.php"><?php echo $_SESSION['login_user']; ?></a></h1>
  </div>
  <div class="w3-container w3-black w3-cell w3-cell-middle">
        <a href="../home.php" class="w3-bar-item w3-button">Home</a>
  <a href="sell.php" class="w3-bar-item w3-button">Sell</a>
  <a href="buy.php" class="w3-bar-item w3-button">Buy</a>
  <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>
</div>

<form action="sell.php" method="post" enctype="multipart/form-data">

<div class="w3-cell-row">
	<div class="w3-container w3-cell" style="max-width: 500px;"> 
	
	</div>
	<div class="w3-container w3-cell">
	    <input type="text" name="pname" required="required" ><br> 
		<input type="file" name="image" value="upload" required="required" ><br>

 <textarea type="textarea" name="info" style="width: 500px; height: 100px;" placeholder="description" required="required" ></textarea><br>
 <button type="submit" name="submit" class="w3-btn w3-black" style="height: 100px; width: 500px;">Upload</button>

	</div>
	<div class="w3-container w3-cell"> 
		
	</div>
</div>


</form>


<?php


    

if (isset($_POST['submit'])) {

    $db = mysqli_connect("Localhost","root","","BisonUsers");
  
  	$pname = mysqli_real_escape_string($db,$_POST['pname']);
  
  	$info = mysqli_real_escape_string($db,$_POST['info']);
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
    		if ($fileSize <= 20000000) {

               $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));


     //now lets save these images into our project folders

    			$fileNameNew = uniqid('',true).".".$fileActualExt;
    			$fileDestination = '../img/'.$fileNameNew;
    			echo $fileNameNew;
    			move_uploaded_file($fileTmpName, $fileDestination);
                


    			// $file $pname $user  $mobno   $info
     // these are the files to be sent to database
     $sq = "insert into sbusers(image,pname,username,mobno,info)values('$img','$pname','$user','$mobno','$info')";
     //connect to the database
     $dbe = mysqli_connect("Localhost","root","","e_com") or die(mysql_error());
     //submitted data is ...
     //$pname - product name   $file - image of product 
     //$info - description of the product $user - name of the user
     //$mobno - mobile number of the user

     //below line will submit data into database....
     mysqli_query($dbe,$sq);


    			echo "uploaded success";
    		}
    		else
    		{
    			echo "your file is too big!";
    		}
    	}
    	else
    	{
            echo "There was an error uploading your file";
            if ($fileError===1) {
            	echo "<h1>The file is too big to upload";
            }
            elseif ($fileError==2) {
            	echo "<h3> The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.</h3>";
            }
            elseif ($fileError==3) {
            	echo "<h2> The uploaded file was only partially uploaded.</h2>";
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