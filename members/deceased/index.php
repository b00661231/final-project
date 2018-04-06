<?php

require '../session-valid.php';

if(!isset($_SESSION['language'])){
	$lang = "text-eng.css";
}else{
	$lang = $_SESSION['language'];	
}

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
      <li class="active"><a href="#" id="navbtn-addDeceased"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
			<li class="active"><a class="navbar-brand">Logged in as:&nbsp;<?php echo  $_SESSION['username']; ?></a></li>
            <li><a href="../logout.php" id="navbtn-logout"><span class="glyphicon glyphicon-log-out">&nbsp; </span></a></li>
    </ul>
  </div>
</nav>

</div></div></div>


<div id="Add Deceased Contents">



<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<h3>Add Deceased Details</h3>
</br>

<FORM METHOD="POST" ACTION="add-deceased.php">

<table border="0">
	<tr>
		<td align="right">Surname:&nbsp;</td>
		<td colspan="2">
<INPUT TYPE=TEXT NAME="DeceasedSurname" SIZE=30 MAXLENGTH=30></td>
	</tr>
<tr><td colspan="3">&nbsp;</td></tr>	
	<tr>
		<td align="right">Forename(s):&nbsp;</td>
		<td colspan="2">
<INPUT TYPE=TEXT NAME="DeceasedForenames" SIZE=30 MAXLENGTH=50></td>
	</tr>
<tr><td colspan="3">&nbsp;</td></tr>	
	<tr>
		<td align="right">Birth Date:&nbsp;</td>
	<td>
<INPUT TYPE=TEXT NAME="DeceasedBirthDate" SIZE=10 MAXLENGTH=10></td>
<td><EM>YYYY-MM-DD</EM></td>
	</tr>
<tr><td colspan="3">&nbsp;</td></tr>	
	<tr>
		<td align="right">Death Date:&nbsp;</td>
	<td>
<INPUT TYPE=TEXT NAME="DeceasedDeathDate" SIZE=10 MAXLENGTH=10></td>
<td><EM>YYYY-MM-DD</EM></td>
	</tr>
<tr><td colspan="3">&nbsp;</td></tr>	
	<tr>
		<td align="right">Age:&nbsp;</td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedAge" SIZE=4 MAXLENGTH=4></td>
<td>Years</td>
	</tr>
<tr><td colspan="3">&nbsp;</td></tr>	
	<tr>
		<td align="right">Lived at:&nbsp;</td>
		<td colspan="2">
<INPUT TYPE=TEXT NAME="DeceasedAddress" SIZE=30 MAXLENGTH=60></td>
	</tr>
<tr><td colspan="3">&nbsp;</td></tr>	
	<tr>
		<td align="right">in (Town):&nbsp;</td>
		<td colspan="2">
<INPUT TYPE=TEXT NAME="DeceasedTown" SIZE=30 MAXLENGTH=30></td>
	</tr>
<tr><td colspan="3">&nbsp;</td></tr>	
	<tr>
		<td align="right">Area:&nbsp;</td>
		<td colspan="2">
<INPUT TYPE=TEXT NAME="DeceasedArea" SIZE=30 MAXLENGTH=30></td>
	</tr>
<tr><td colspan="3">&nbsp;</td></tr>	
	<tr>
		<td align="right">Country:&nbsp;</td>
		<td colspan="2">
<INPUT TYPE=TEXT NAME="DeceasedCountry" SIZE=30 MAXLENGTH=30></td>
	</tr>
<tr><td colspan="3">&nbsp;</td></tr>	
	<tr>
	<td colspan="3"><INPUT TYPE=SUBMIT VALUE="Add Details" class="btn  btn-block"></td>
	</tr>
</table>

</FORM>




</div></div></div>


</div> <!-- End Add Deceased Contents -->





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
