<?php

require '../session-valid.php';
require '../../config.inc';

$memid = $_SESSION['memberid'];

if(isset($_SESSION['deceasedid'])){
	$deceasedid = $_SESSION['deceasedid'];
}else{
	$deceasedid = $_POST['deceasedid'];
}

unset($_SESSION['deceasedid']);


$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 

$query = "SELECT * FROM `deceased` WHERE `deceased-id`='$deceasedid'";  // sets up deceaded details sql query
$result = mysqli_query($conn, $query) or die("Invalid deceased details query"); // runs query using open connection
$num = mysqli_num_rows($result); 

$query2 = "SELECT * FROM `notice` WHERE `deceased-id`='$deceasedid'";  // sets up funeral notice sql query
$result2 = mysqli_query($conn, $query2) or die("Invalid notice query"); // runs query using open connection
$num2 = mysqli_num_rows($result2);

$query3 = "SELECT `member-name`, `message`, `creation-date` FROM `memorial` WHERE `deceased-id` = '$deceasedid'";  // sets up memorials sql query
$result3 = mysqli_query($conn, $query3) or die("Invalid memorial query"); // runs query using open connection
$num3 = mysqli_num_rows($result3);


$query4 = "SELECT `submitted-by`, `category`, `fact`, `create-date` FROM fact WHERE `deceased-id`='$deceasedid'";  // sets up facts sql query
$result4 = mysqli_query($conn, $query4) or die("Invalid deceased details query"); // runs query using open connection
$num4 = mysqli_num_rows($result4); 


$query5 = "SELECT * FROM `photo` WHERE `deceased-id`='$deceasedid'";  // sets up photo sql query
$result5 = mysqli_query($conn, $query5) or die("Invalid deceased details query"); // runs query using open connection
$num5 = mysqli_num_rows($result5); 

mysqli_close($conn);

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
  
  <script src="../../scripts/tabs-mem.js"></script>
  
  
  <link href="../../styles/memorials.css" rel="stylesheet">
  <link href="../../styles/text-eng.css" rel="stylesheet">
</head>
<body>


<!-- Top Navigation Bar -->

<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="../"id="navbtn-MemberProfile""></a></li>
      <li><a href="../search/" id="navbtn-Search"></a></li>
      <li><a href="../deceased" id="navbtn-addDeceased"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
			<li class="active"><a class="navbar-brand">Logged in as:&nbsp;<?php echo  $_SESSION['username']; ?></a></li>
            <li><a href="../logout.php" id="navbtn-logout"><span class="glyphicon glyphicon-log-out">&nbsp; </span></a></li>
    </ul>
  </div>
</nav>

</div></div></div>


<div id="Deceased Profile Contents">



<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<h3>Deceased Profile Details</h3>



<table width="50%">
<tr><td>

<?php

if ($num==0){
	echo "<p>No Details Available</p>";
	}else{
	echo"<table border='0' width='70%'>";
		
	while($row = mysqli_fetch_row($result))      //  while there are rows available
	{
		echo"<tr>
		<tr><td align='right'><strong>Surname:&nbsp;</strong></td>
		<td align='left'>".$row[1]."</td></tr>
		<tr><td align='right'><strong>First Names:&nbsp;</strong></td>
		<td align='left'>".$row[2]."</td></tr>
		<tr><td align='right'><strong>Birth Date:&nbsp;</strong></td>		
		<td align='left'>".$row[3]."</td></tr>
		<tr><td align='right'><strong>Death Date:&nbsp;</strong></td>
		<td align='left'>".$row[4]."</td></tr>
		<tr><td align='right'><strong>Age:&nbsp;</strong></td>
		<td align='left'>".$row[5]."</td></tr>
		<tr><td align='right'><strong>Lived at:&nbsp;</strong></td>
		<td align='left'>".$row[6]."</td></tr>
		<tr><td align='right'><strong>Town:&nbsp;</strong></td>
		<td align='left'>".$row[7]."</td></tr>
		<tr><td align='right'><strong>Area:&nbsp;</strong></td>
		<td align='left'>".$row[8]."</td></tr>
		<tr><td align='right'><strong>Country:&nbsp;</strong></td>
		<td align='left'>".$row[9]."</td></tr>
		</tr>";
				
	};
	echo"</table>";
};

mysqli_close($conn); // close database connection

?>


</td>
<td align="center">

<img src="../images/blank.jpg"></br></br>
<form  action='../photo/' method='POST'>
		<input type='hidden' name='deceasedid' value=<?php echo $deceasedid ?>>
		<input  type='submit' class='btn' value='Add Photo'>
		</form>

		<!-- TODO show uploaded photo if there is one
		 if not show blank with upload button visible -->

</td></tr>
</table>


<h3>Funeral Notice</h3>

<?php

if ($num2==0){
	echo "<p>No Notices Available</p>
	<form  action='../notice/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid' >
		<input  type='submit' class='btn' value='Add Notice'>
		</form>";
	}else{
	echo"<table border='0' width='70%'>";
		
	while($row2 = mysqli_fetch_row($result2))      //  while there are rows available
	{
		echo"<tr>
		<tr><td align='right'><strong>Date:&nbsp;</strong></td>
		<td align='left'>".$row2[3]."</td>
		<td align='right'><strong>Time:&nbsp;</strong></td>
		<td align='left'>".$row2[4]."</td>		</tr>
		<tr><td align='right'><strong>Location:&nbsp;</strong></td>
		<td align='left' colspan='3'>".$row2[5]."</td></tr>
		<tr><td align='right'><strong>Details:&nbsp;</strong></td>		
		<td align='left' colspan='3'>".$row2[6]."</td></tr>
		<tr><td colspan='4'>&nbsp;</td></tr>
		
		
		";
				
	};
	echo"</table>";
	
	if($num2==0){
	echo "<form  action='../notice/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid'>
		<input  type='submit' class='btn' value='Add Notice'>
		</form>";
	};
};

mysqli_close($conn); // close database connection

?>

<h3>Memorials</h3>


<?php

if ($num3==0){
	echo "<p>No Memorials Available</p>
	<form  action='../memorial/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid' >
		<input  type='submit' class='btn' value='Add Memorial'>
		</form>";
	}else{
			
	while($row3 = mysqli_fetch_row($result3))      //  while there are rows available
	{
		echo"<table border='0' width='300'><tr>
		<tr><td align='left'>\"".$row3[1]."\"</td></tr>
		<tr><td align='center'>Posted by: <strong>".$row3[0]."</strong> on <strong>".$row3[2]."</strong></td></tr>
		</table></br>";
				
	};
	echo"<form  action='../memorial/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid' >
		<input  type='submit' class='btn' value='Add Memorial'>
		</form>";
};

mysqli_close($conn); // close database connection

?>


<h3>Facts</h3>

<?php

if ($num4==0){
	echo "<p>No Facts Available</p>
	<form  action='../fact/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid' >
		<input  type='submit' class='btn' value='Add Fact'>
		</form>";
	}else{
	echo"<table border='0' width='300'>";
		
	while($row4 = mysqli_fetch_row($result4))      //  while there are rows available
	{
		echo"<tr>
		<td align='left'>".$row4[1]." - ".$row4[2]."</td>
		</tr>";
				
	};
	echo"</table></br>
	<form  action='../fact/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid' >
		<input  type='submit' class='btn' value='Add Fact'>
		</form>";
};

mysqli_close($conn); // close database connection

?>






</div></div></div>


</div> <!-- End Deceased Profile Contents -->





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
           
  </div>
</nav>

</div></div></div>


</body>
</html>
