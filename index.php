<?php
  include "dbconnect.php";
  session_start();
  if (isset($_POST['submit'])) {
  	$username = mysqli_real_escape_string($conn,$_POST['username']);
  	$password = mysqli_real_escape_string($conn,$_POST['password']);
  	$sql = "SELECT uid FROM busers where uname = '$username' and pass = '$password'";
  	$result = mysqli_query($conn,$sql);
  	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  	$active = $row['active'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['username'] = '$username';
         $_SESSION['login_user'] = $username;
         
         header("location: home.php?success");
      }else {
         $error = "invalid login details...";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bison | Login</title>
</head>
<body>
    <div>
    	<div>
    		<form action="" method="post">
    			<input type="text" name="username" required="required"><br>
    			<input type="password" name="password" required="required"><br>
    			<input type="submit" name="submit" value="submit"><br>
    		</form>
    		<div style="font-size: 10px;color: red;margin-top: 10px;"><?php global $error;echo $error; ?></div>
    	</div>
    </div>
</body>
</html>