<?php

require 'session-valid.php';
require '../config.inc';

$memid = $_SESSION['memberid'];
unset($_SESSION['deceasedid']);

$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 

$query = "SELECT `surname`, `firstnames`, `death-date`, `deceased-id` FROM `deceased` WHERE `member-id`='$memid'";  // sets up sql query
$result = mysqli_query($conn, $query) or die("Invalid query"); // runs query using open connection

$num = mysqli_num_rows($result);

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
  
  <script src="../scripts/tabs-mem.js"></script>
  
  
  <link href="../styles/memorials.css" rel="stylesheet">
  <link href="../styles/text-eng.css" rel="stylesheet">
</head>
<body>


<!-- Top Navigation Bar -->

<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"id="navbtn-MemberProfile""></a></li>
      <li><a href="../members/search/" id="navbtn-Search"></a></li>
      <li><a href="../members/deceased/" id="navbtn-addDeceased"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
			<li class="active"><a class="navbar-brand">Logged in as:&nbsp;<?php echo  $_SESSION['username']; ?></a></li>
            <li><a href="logout.php" id="navbtn-logout"><span class="glyphicon glyphicon-log-out">&nbsp; </span></a></li>
    </ul>
  </div>
</nav>

</div></div></div>


<div id="MemberProfile-Contents">



<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<h3>Member Profile</h3>

<table width="70%">
<tr>
<td>Display Name:<strong> <?php echo  $_SESSION['displayname']; ?></strong></td>
<td>Membership Type:<strong> <?php echo  $_SESSION['auth']; ?></strong></td>
<td><button type="button" class="btn">Upgrade</button></td>
</tr>
</table>


</br></br></br>


<h4>Submitted Memorials</h4>

<?php

if ($num==0){
	echo "<p>No Memorials Submitted</p>";
	}else{
	echo"<table border='0' width='70%'>";
	echo"<tr><td align='center'><strong>Surname</strong></td>
	<td align='center'><strong>First Names</strong></td>
	<td align='center'><strong>Death Date</strong></td>
	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
	
	while($row = mysqli_fetch_row($result))      //  while there are rows available
	{
		echo"<tr><td align='center'>".$row[0]."</td>
		<td align='center'>".$row[1]."</td>
		<td align='center'>".$row[2]."</td>
		<td align='center'>
		<form  action='../members/deceased-profile/' method='POST'>
		<input type='hidden' name='deceasedid' value='$row[3]'>
		<input  type='submit' class='btn' value='View Profile'>
		</form>
		</td></tr>";
		
		echo"<tr><td colspan='4'>&nbsp;</td></tr>";
	};
	echo"</table>";
};

mysqli_close($conn); // close database connection

?>




</div></div></div>


</div> <!-- End Member Profile Contents -->





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
