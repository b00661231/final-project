<?php
session_start(); 

// check if member


if ($_SESSION['auth'] == "basic" || $_SESSION['auth'] == "paid" || $_SESSION['auth'] == "comm")
{}
else
{
header('Location: ../login/');
exit();
};


$uname = $_SESSION['username'];
$type = $_SESSION['auth'];

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
			<li class="active"><a class="navbar-brand">Logged in as:<?php echo $uname; ?></a></li>
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

<table width="80%">
<tr>
<td>Display Name: xxxxxxxxx</td>
<td>Membership Type: <?php echo $type; ?></td>
<td><button type="button" class="btn">Upgrade</button></td>
</tr>
</table>


</br></br></br>


<h4>My Memorials</h4>

<table border="0" width="70%">
<tr>
<td align="center">Surname</td>
<td align="center">First Names</td>
<td align="center">Death Date</td>
<td align="center"><a href="../members/deceased-profile/"><button type="button" class="btn">View Profile</button></a></td>
<td align="center"><a href="../members/notice/"><button type="button" class="btn">Add Funeral Notice</button></a></td>
<td align="center"><a href="../members/memorial/"><button type="button" class="btn">Add Memorial</button></a></td>
<td align="center"><a href="../members/fact/"><button type="button" class="btn">Add Facts</button></a></td>
</tr>
</table>





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
