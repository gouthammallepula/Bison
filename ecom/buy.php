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
    <h1><a id="branding" href="buysell.php"><?php echo $_SESSION['login_user']; ?></a></h1>
  </div>
  <div class="w3-container w3-black w3-cell w3-cell-middle">
        <a href="../home.php" class="w3-bar-item w3-button">Home</a>
  <a href="sell.php" class="w3-bar-item w3-button">Sell</a>
  <a href="buy.php" class="w3-bar-item w3-button">Buy</a>
  <a href="../logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>
</div>





</body>
</html>

<?php
  
  //connecting to database
  $dbp = mysqli_connect("Localhost","root","","e_com");

  //selecting data from tables
  $data = "select *from sbusers;";

  $resultinf = mysqli_query($dbp,$data);

  
     $count = mysqli_num_rows($resultinf);
		
    
      if ($count > 0) {

      	echo '<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">';

   echo '<div class="w3-row-padding w3-padding-16 w3-center" id="food">';
    
      	while ($row = mysqli_fetch_array($resultinf)) {
      	  

      echo '


<div class="w3-quarter">
   <div class="w3-container-fluid w3-black">

       <img src="data:image/jpeg/jpg/png;base64,'.base64_encode($row['image']).'"height="200" width="200" />
    </div>
      <div class="w3-blue">';

      echo '<h1>TITLE</h1>';
echo '
      </div>
      <div class="w3-grey">
          <p>description faehrfskjuh hfakjsehjkwfeah kjhwefkj hwekjrghkj hkjerw kjhgkjerhkjgbrbkehwhbkwebhjber</p>
       </div>
</div>

 
     

      



      ';
     


  //      echo '<img src="data:image/jpeg/jpg/png;base64,'.base64_encode($row['image']).'"height="200" width="200" />';
   //   	  echo "<br>";

      	  
      	}
      	 echo "</div></div>";
      
      }

?>  

