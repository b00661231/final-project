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


<div id="Add Photo Contents">



<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<h3>Add Photo</h3>
<h3><?php echo $row[1]." ".$row[0]." (".$row[2].")"; ?></h3>

</br></br>


<FORM METHOD="POST" ACTION="add-photo.php" enctype="multipart/form-data">

<INPUT TYPE=hidden NAME="DeceasedId" VALUE="<?php echo $deceasedid; ?>">

<table width="300" border="0">
<tr>
<td align="center"><strong>Upload Photo </strong></td>
</tr>
<tr><td></br></td></tr>
<tr>
<td><input name="ufile" type="file" id="ufile" size="50" /></td>
</tr>
<tr><td></br></td></tr>
<tr>
<td align="center"><INPUT TYPE=SUBMIT VALUE="Upload" class="btn  btn-block"></td>
</tr>
</table>
</td>
</form>



</br></br>

<form  action='../deceased-profile/' method='POST'>
		<input type='hidden' name='deceasedid' value='<?php echo $deceasedid ?>'>
		<input  type='submit' class="btn" value='Cancel'>
		</form>



</div></div></div>


</div> <!-- End Upload Photo Contents -->





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
