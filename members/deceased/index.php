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
      <li class="active"><a href="#" id="navbtn-addDeceased"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
			<li class="active"><a class="navbar-brand">Logged in as:&nbsp;</a></li>
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


<FORM METHOD="POST" ACTION="">

<P>
Deceased ID</P>
<BLOCKQUOTE>
<P>
<INPUT TYPE=TEXT NAME="DeceasedID" SIZE=10 MAXLENGTH=10>
</P>
<P>
MemberId</P>
<BLOCKQUOTE>
<P>
<INPUT TYPE=TEXT NAME="MemberID" SIZE=10 MAXLENGTH=10>
</P>
</BLOCKQUOTE>
<P>
&nbsp;</P>
<P>
&nbsp;</P>
<table border="0" width="73%" id="table1">
	<tr>
		<td>Deceased Surname</td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedSurname" SIZE=30 MAXLENGTH=30></td>
	</tr>
	<tr>
		<td>Deceased Forenames</td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedForenames" SIZE=50 MAXLENGTH=50></td>
	</tr>
	<tr>
		<td>Deceased Birth Date
<EM> -- dd/mm/yy</EM></td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedBirthDate" SIZE=8 MAXLENGTH=8></td>
	</tr>
	<tr>
		<td>Deceased Death Date
<EM> -- dd/mm/yy</EM></td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedDeathDate" SIZE=8 MAXLENGTH=8></td>
	</tr>
	<tr>
		<td>Deceased Age</td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedAge" SIZE=4 MAXLENGTH=4></td>
	</tr>
	<tr>
		<td>Deceased Address</td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedAddress" SIZE=60 MAXLENGTH=60></td>
	</tr>
	<tr>
		<td>Deceased Town</td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedTown" SIZE=30 MAXLENGTH=30></td>
	</tr>
	<tr>
		<td>Deceased Area</td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedArea" SIZE=30 MAXLENGTH=30></td>
	</tr>
	<tr>
		<td>Deceased Country</td>
		<td>
<INPUT TYPE=TEXT NAME="DeceasedCountry" SIZE=30 MAXLENGTH=30></td>
	</tr>
</table>
</BLOCKQUOTE>
<INPUT TYPE=SUBMIT VALUE="Submit Form">&nbsp;
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