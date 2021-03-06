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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  
  
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
      <li><a href="../register/" id="navbtn-register"><span class="glyphicon glyphicon-user">&nbsp; </span></a></li>
      <li><a href="../login/" id="navbtn-login"><span class="glyphicon glyphicon-log-in">&nbsp; </span></a></li>
    </ul>
  </div>
</nav>

</div></div></div>


<div id="Privacy-Contents">





<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div align="center">
<img border="0" src="../images/daily_memorials_logo.jpg">
</div>

<h3 id="head-privacy"></h3>
<p id="para1-privacy"></p>
<p id="para2-privacy"></p> 


</div></div></div>

</div><!-- End Contents -->



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
      <li class="active"><a href="#" id="navbtn-privacy"></a></li>
    </ul>
  </div>
</nav>

</div></div></div>


</body>
</html>
