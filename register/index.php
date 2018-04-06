<?php

session_start();


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
 
  <link href="../styles/memorials.css" rel="stylesheet">
  <link id="language" href="../styles/<?php echo $lang; ?>" rel="stylesheet">
</head>
<body>


<!-- Top Navigation Bar -->

<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="../" id="navbtn-home"></a></li>
      <!-- <li><a href="../about/" id="navbtn-about"></a></li> -->
      <li><a href="../contact/" id="navbtn-contact"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#" id="navbtn-register"><span class="glyphicon glyphicon-user">&nbsp; </span></a></li>
      <li><a href="../login/" id="navbtn-login"><span class="glyphicon glyphicon-log-in">&nbsp; </span></a></li>
    </ul>
  </div>
</nav>

</div></div></div>


<div id="Registration-Contents">





<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<img border="0" src="../images/daily_memorials_logo.jpg">

<div align="center">

</br>

<h1 id="register-head"></h1>
	
	</br></br>
	
	<table border="0" width="80%"><tr><td align="center" valign="middle">
	
	
	
<form action="reg_auth.php"method="POST">

<table border="0" width="80%">
<tr>
	<td align="right" id="register-lab1"></td>
	<td><input type="text" id="emailLogin" size="16" maxLength="20" name="login_name"></td>
	<td id="register-text1"></td>
</tr>

<tr><td></br></br></td>
<td colspan="2"><span id="err1" class="error"></span></td>
</tr>

<tr>
	<td align="right" id="register-lab2"></td>
	<td><input type="password" id="pw1" size="16" maxLength="20" name="login_passwd"></td>
	<td id="register-text2"></td>
	</td>
</tr>

<tr>
	<td></br></br></td>
	<td><span id="err2" class="error"></span></td>
	<td id="register-text2a"></td>
	</td>
</tr>

<tr>
	<td align="right" id="register-lab3"></td>
	<td><input type="password" id="pw2" size="16" maxLength="20" name="retype_passwd"></td>
	<td id="register-text2b"></td>
</tr>
<tr>

<tr><td></br></br></td>
<td colspan="2"><span id="err3" class="error"></span></td>
</tr>

<tr>
<td align="right" id="register-lab4"></td>
<td><input type='text' id="name" size='16' maxLength='30' name='dname'></td>
<td id="register-text4"></td>
</tr>

<tr><td></br></br></td>
<td colspan="2"><span id="err4" class="error"></span></td>
</tr>

	<td align="center" colspan=4><input type="submit" value="Register" class="btn  btn-block"></td>
</tr>
</table>

</form>


		
	</td>
	</tr></table>
	
	</br></br>
	
	
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
      <li><a href="../terms/"id="navbtn-terms"></a></li>
      <li><a href="../privacy/" id="navbtn-privacy"></a></li>
    </ul>
  </div>
</nav>

</div></div></div>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 <script src="../scripts/validate.js" type="text/javascript"></script>


</body>
</html>
