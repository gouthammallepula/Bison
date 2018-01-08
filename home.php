<?php
   include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/style.css">

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
        <a href="./home.php" class="w3-bar-item w3-button">Home</a>
  <a href="./ecom/sell.php" class="w3-bar-item w3-button">Sell</a>
  <a href="./ecom/buy.php" class="w3-bar-item w3-button">Buy</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>
</div>



<h1 class="w3-display"> Hello Master!</h1>

</body>
</html>
