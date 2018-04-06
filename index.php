<?php

session_start();

require 'config.inc';

if(!isset($_SESSION['language'])){
	$lang = "text-eng.css";
}else{
	$lang = $_SESSION['language'];	
}



$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 

$query = "SELECT * FROM deceased ORDER BY `deceased-id` DESC";  // sets up deceaded details sql query
$result = mysqli_query($conn, $query) or die("Invalid deceased details query"); // runs query using open connection
$num = mysqli_num_rows($result); 




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daily Memorials</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  
  
  <link href="styles/memorials.css" rel="stylesheet">
  <link id="language" href="styles/<?php echo $lang; ?>" rel="stylesheet">
</head>
<body>


<!-- Top Navigation Bar -->

<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" id="navbtn-home"></a></li>
      <!-- <li><a href="about/" id="navbtn-about"></a></li> -->
      <li><a href="contact/" id="navbtn-contact"></a></li>
	 	  <li><a href="language/english.php"><img src="images/english.jpg"></a></li>
	  <li><a href="language/french.php"><img src="images/french.jpg"></a></li>
	  <li><a href="language/german.php"><img src="images/german.jpg"></a></li>
	  <li><a href="language/spanish.php"><img src="images/spanish.jpg"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register/" id="navbtn-register"><span class="glyphicon glyphicon-user">&nbsp; </span></a></li>
      <li><a href="login/" id="navbtn-login"><span class="glyphicon glyphicon-log-in">&nbsp; </span></a></li>
    </ul>
  </div>
</nav>

</div></div></div>


<div id="HomePage-Contents">




<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<img border="0" src="images/daily_memorials_logo.jpg">


</div></div></div>


<!-- Recent Memorials and Intro -->


<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

  <p align="left" id="home-p1"></p>
  <p align="left" id="home-p2"></p>
  <p align="left" id="home-p3"></p>
  <p align="left" id="home-p4"></p>
     
  
</div>



<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

  <h3 id="home-head1"></h3>
  
  <?php

if ($num==0){
	echo "<p>No Data Available</p>";
	}else{
	echo"<table border='0'>";
	$count=0;	
	while($row = mysqli_fetch_row($result))      //  while there are rows available
		{
		if($count<10)
			{
		echo"<tr>
		<td align='left'>".$row[1].", ".$row[2]."</td>
		<td align='left'>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td align='left'>".$row[4]."</td>
		</tr>";
		$count++;
			}
		};
	echo"</table>";
};

mysqli_close($conn); // close database connection

?>
  
</div>
</div>


</div></div></div>


</div></div> <!-- End Contents -->







<!-- Spacing before bottom Navigation Bar -->

<div class="container">
</br></br></br>
</div>


<!-- Bottom Navigation Bar -->


<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
  <div class="navbar-header">
      <a class="navbar-brand">Daily Memorials (c) 2018</a>
    </div>
    
       <ul class="nav navbar-nav navbar-right">
      <li><a href="terms/"id="navbtn-terms"></a></li>
      <li><a href="privacy/" id="navbtn-privacy"></a></li>
    </ul>
  </div>
</nav>

</div></div></div>


</body>
</html>
