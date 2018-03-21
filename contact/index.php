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
      <li><a href="../" id="navbtn-home"></a></li>
      <li><a href="../about/" id="navbtn-about"></a></li>
      <li class="active"><a href="#" id="navbtn-contact"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../register/" id="navbtn-register"><span class="glyphicon glyphicon-user">&nbsp; </span></a></li>
      <li><a href="../login/" id="navbtn-login"><span class="glyphicon glyphicon-log-in">&nbsp; </span></a></li>
    </ul>
  </div>
</nav>

</div></div></div>


<div id="Contact-Contents">





<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<img border="0" src="../images/daily_memorials_logo.jpg">
<h3>How to Contact Us</h3>


<form action="" method="post">
	<table width="400px">
	<tr>
	<td>
	First Name: 
	</td><td>
	<input type="text" name="first_name" maxlength="50" size="30">  
	</td></tr><tr><td>
	Last Name:  
	</td><td>
	<input type="text" name="last_name" maxlength="50" size="30"><br/><br/> 
	</td></tr><tr><td>
	Email Add : 
	</td><td>
	<input type="text" name="email" maxlength="50" size="30"><br/></br>
	</td></tr><tr><td valign="top">
	Comments:   
	</td><td>
	<textarea name="Comments" maxlength="1000" cols="30" rows="6"></textarea> 
	</td></tr><tr>
	<td colspan="2" align="center">
	<br> <input type="submit" class="button" name="submit" value="Submit">
	</td></tr>
	</table>
	</form>
	</div>
	<?php 
if(isset($_POST['submit'])){
	$to = "info@dailymemorials.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['Comments'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['Comments'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	echo "<div align='center'></br></br><strong>Mail Sent. Thank you for contacting Daily Memorials " . $first_name . ". </br>We will get back to you shortly.</strong></div>";
	}
	?>	




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


</body>
</html>
