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
      <li"><a href="../deceased" id="navbtn-addDeceased"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
			<li class="active"><a class="navbar-brand">Logged in as:&nbsp;</a></li>
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

<FORM METHOD="POST" ACTION="">
<P>
DeceasedId</P>
<BLOCKQUOTE>
<P>
<INPUT TYPE=TEXT NAME="DeceasedId" SIZE=10 MAXLENGTH=10>
</P>
<P>
MemberId</P>
<BLOCKQUOTE>
<P>
<INPUT TYPE=TEXT NAME="MemberId" SIZE=10 MAXLENGTH=10>
</P>
</BLOCKQUOTE>
<table border="0" width="56%" id="table1">
	<tr>
		<td width="312">Funeral Date<EM> -- dd/mm/yy</EM></td>
		<td>
<INPUT TYPE=TEXT NAME="FuneralDate" SIZE=8 MAXLENGTH=8></td>
	</tr>
	<tr>
		<td width="312">Funeral Time</td>
		<td>
<INPUT TYPE=TEXT NAME="FuneralTime" SIZE=16 MAXLENGTH=16></td>
	</tr>
	<tr>
		<td width="312">Funeral Location</td>
		<td>
<INPUT TYPE=TEXT NAME="FuneralLocation" SIZE=60 MAXLENGTH=60></td>
	</tr>
	<tr>
		<td width="312">Funeral Details</td>
		<td>
<TEXTAREA NAME="FuneralDetails" ROWS=5 COLS=35></TEXTAREA></td>
	</tr>
</table>
</BLOCKQUOTE>
<INPUT TYPE=SUBMIT VALUE="Submit Form">&nbsp;
</FORM>

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
