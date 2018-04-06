<?php

require '../session-valid.php';
require '../../config.inc';

if(!isset($_SESSION['language'])){
	$lang = "text-eng.css";
}else{
	$lang = $_SESSION['language'];	
}

$memid = $_SESSION['memberid'];
$deceasedid = $_POST['deceasedid'];

$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 

$query = "SELECT `surname`, `firstnames`, `death-date` FROM `deceased` WHERE `deceased-id`='$deceasedid'";  // sets up deceaded details sql query
$result = mysqli_query($conn, $query) or die("Invalid deceased details query"); // runs query using open connection
$row = mysqli_fetch_row($result);

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
  
   
  <link href="../../styles/memorials.css" rel="stylesheet">
  <link id="language" href="../../styles/<?php echo $lang; ?>" rel="stylesheet">
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


<div id="Add Funeral Notice Contents">



<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<h3>Add Funeral Notice Details</h3>
<h3><?php echo $row[1]." ".$row[0]." (".$row[2].")"; ?></h3>

</br></br>

<FORM METHOD="POST" ACTION="add-notice.php">

<INPUT TYPE=hidden NAME="DeceasedId" VALUE="<?php echo $deceasedid; ?>">


<table border="0">
	<tr><td align="right">Date:&nbsp;</td>
		<td align="left"><INPUT TYPE=TEXT NAME="FuneralDate" SIZE=8 MAXLENGTH=8><EM>&nbsp;YYYY-MM-DD</EM></td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
		<td align="right"">Time:&nbsp;</td>
		<td align="left"><INPUT TYPE=TEXT NAME="FuneralTime" SIZE=16 MAXLENGTH=16></td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
		<td align="right">Location:&nbsp;</td>
		<td align="left"><INPUT TYPE=TEXT NAME="FuneralLocation" SIZE=60 MAXLENGTH=60></td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
		<td align="right" valign="top">Details:&nbsp;</td>
		<td align="left"><TEXTAREA NAME="FuneralDetails" ROWS=5 COLS=62></TEXTAREA></td>
	</tr>
	
	<tr><td colspan="2">
		
	<INPUT TYPE=SUBMIT VALUE="Add Notice" class="btn  btn-block">
		
	</td></tr>
	
</table>

</FORM>

</br></br>

<form  action='../deceased-profile/' method='POST'>
		<input type='hidden' name='deceasedid' value='<?php echo $deceasedid ?>'>
		<input  type='submit' class="btn" value='Cancel'>
		</form>



</div></div></div>


</div> <!-- End Add Funeral Notice Contents -->





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
