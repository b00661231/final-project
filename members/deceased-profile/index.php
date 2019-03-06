<?php

require '../session-valid.php';
require '../../config.inc';

if(!isset($_SESSION['language'])){
	$lang = "text-eng.css";
}else{
	$lang = $_SESSION['language'];	
}

$memid = $_SESSION['memberid'];

if(isset($_SESSION['deceasedid'])){
	$deceasedid = $_SESSION['deceasedid'];
}else{
	$deceasedid = $_POST['deceasedid'];
}

unset($_SESSION['deceasedid']);
unset($_SESSION['maxrecords']);
unset($_SESSION['currecord']);


$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 

$query = "SELECT * FROM `deceased` WHERE `deceased-id`='$deceasedid'";  // sets up deceaded details sql query
$result = mysqli_query($conn, $query) or die("Invalid deceased details query"); // runs query using open connection
$num = mysqli_num_rows($result); 

$query2 = "SELECT * FROM `notice` WHERE `deceased-id`='$deceasedid'";  // sets up funeral notice sql query
$result2 = mysqli_query($conn, $query2) or die("Invalid notice query"); // runs query using open connection
$num2 = mysqli_num_rows($result2);

$query3 = "SELECT `member-name`, `message`, `creation-date` FROM `memorial` WHERE `deceased-id` = '$deceasedid' AND `Entry_Type` = 'Memorial'";  // sets up memorials sql query
$result3 = mysqli_query($conn, $query3) or die("Invalid memorial query"); // runs query using open connection
$num3 = mysqli_num_rows($result3);


$query4 = "SELECT `member-name`, `message`, `creation-date` FROM `memorial` WHERE `deceased-id` = '$deceasedid' AND `Entry_Type` = 'Story'";  // sets up memorials sql query
$result4 = mysqli_query($conn, $query4) or die("Invalid story query"); // runs query using open connection
$num4 = mysqli_num_rows($result4);


$query5 = "SELECT `filename` FROM `photo` WHERE `deceased-id`='$deceasedid'";  // sets up photo sql query
$result5 = mysqli_query($conn, $query5) or die("Invalid photo query"); // runs query using open connection
$num5 = mysqli_num_rows($result5); 

$query6 = "SELECT `member-name`, `message`, `creation-date` FROM `memorial` WHERE `deceased-id` = '$deceasedid' AND `Entry_Type` = 'Fact'";  // sets up memorials sql query
$result6 = mysqli_query($conn, $query6) or die("Invalid fact query"); // runs query using open connection
$num6 = mysqli_num_rows($result6);

$query7 = "SELECT `Link_Text`, `Link_Ref`, `member-name`, `Reason`, `creation-date` FROM `Link` WHERE `deceased_ID` = '$deceasedid'";  // sets up memorials sql query
$result7 = mysqli_query($conn, $query7) or die("Invalid link query"); // runs query using open connection
$num7 = mysqli_num_rows($result7);

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


<div id="Deceased Profile Contents">



<div class="container" align="center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



<h3>Deceased Profile Details</h3>


<table width=70%>
<tr><td width=50%>


<table width="500">
<tr><td>

<?php

if ($num==0){
	echo "<p>No Details Available</p>";
	}else{
	echo"<table border='0' width='70%'>";
		
	while($row = mysqli_fetch_row($result))      //  while there are rows available
	{
		echo"<tr>
		<tr><td align='right'><strong>Surname:&nbsp;</strong></td>
		<td align='left'>".$row[1]."</td></tr>
		<tr><td align='right'><strong>First Names:&nbsp;</strong></td>
		<td align='left'>".$row[2]."</td></tr>
		<tr><td align='right'><strong>Birth Date:&nbsp;</strong></td>		
		<td align='left'>".$row[3]."</td></tr>
		<tr><td align='right'><strong>Death Date:&nbsp;</strong></td>
		<td align='left'>".$row[4]."</td></tr>
		<tr><td align='right'><strong>Age:&nbsp;</strong></td>
		<td align='left'>".$row[5]."</td></tr>
		<tr><td align='right'><strong>Lived at:&nbsp;</strong></td>
		<td align='left'>".$row[6]."</td></tr>
		<tr><td align='right'><strong>Town:&nbsp;</strong></td>
		<td align='left'>".$row[7]."</td></tr>
		<tr><td align='right'><strong>Area:&nbsp;</strong></td>
		<td align='left'>".$row[8]."</td></tr>
		<tr><td align='right'><strong>Country:&nbsp;</strong></td>
		<td align='left'>".$row[9]."</td></tr>
		</tr>";
				
	};
	echo"</table>";
};

mysqli_close($conn); // close database connection

?>


</td>
<td align="center">

<?php
	if($num5 >0){
		
	$row5 = mysqli_fetch_row($result5);
		
	echo "<img src='../photo/upload/".$row5[0]."' height='200px' width='150px'>";	
	
	}else{

		echo "<img src='../images/blank.jpg'></br></br>
		<form  action='../photo/' method='POST'>
		<input type='hidden' name='deceasedid' value=".$deceasedid.">
		<input  type='submit' class='btn' value='Add Photo'>
		</form>
		";

		}
?>

		</td></tr>
		</table>

<div align="center">
<h3>Funeral Notice</h3>

<?php

if ($num2==0){
	echo "<p>No Notices Available</p>
	<form  action='../notice/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid' >
		<input  type='submit' class='btn' value='Add Notice'>
		</form>";
	}else{
	echo"<table border='0' width='70%'>";
		
	while($row2 = mysqli_fetch_row($result2))      //  while there are rows available
	{
		echo"<tr>
		<tr><td align='right'><strong>Date:&nbsp;</strong></td>
		<td align='left'>".$row2[3]."</td>
		<td align='right'><strong>Time:&nbsp;</strong></td>
		<td align='left'>".$row2[4]."</td>		</tr>
		<tr><td align='right'><strong>Location:&nbsp;</strong></td>
		<td align='left' colspan='3'>".$row2[5]."</td></tr>
		<tr><td align='right'><strong>Details:&nbsp;</strong></td>		
		<td align='left' colspan='3'>".$row2[6]."</td></tr>
		<tr><td colspan='4'>&nbsp;</td></tr>
		
		
		";
				
	};
	echo"</table>";
	
	if($num2==0){
	echo "<form  action='../notice/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid'>
		<input  type='submit' class='btn' value='Add Notice'>
		</form>";
	};
};

mysqli_close($conn); // close database connection

?>

</div>
</td>
<td width = 50% valign="top" align="center">


<!-- Trigger the modal with a button -->
<?php
if ($num3==0){
	echo "</br></br><p>No Memorials Available</p>";
	}else{
	echo "</br></br>

<button type=''button' class='btn' data-toggle='modal' data-target='#memorials'>Memorials ($num3)</button>";
	};
	
if ($num4==0){
	echo "</br></br><p>No Stories Available</p>";
	}else{
	echo "</br></br>

<button type=''button' class='btn' data-toggle='modal' data-target='#stories'>Stories ($num4)</button>";
	};
	
if ($num6==0){
	echo "</br></br><p>No Facts Available</p>";
	}else{
	echo "</br></br>

<button type=''button' class='btn' data-toggle='modal' data-target='#facts'>Facts ($num6)</button>";
	};
	
if ($num7==0){
	echo "</br></br><p>No Links Available</p></br></br>";
	}else{
	echo "</br></br>

<button type=''button' class='btn' data-toggle='modal' data-target='#links'>Links ($num7)</button></br></br>";
	};


		
	
	
	echo"<table><tr><td>
	<form  action='../add/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid' >
		<input  type='submit' class='btn' value='Add Message'>
		</form>
		</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
		<form  action='../link/' method='POST'>
		<input type='hidden' name='deceasedid' value= '$deceasedid' >
		<input  type='submit' class='btn' value='Add Link'>
		</form></td></tr></table>";	


mysqli_close($conn); // close database connection

?>

<!-- Memorials Modal -->
<div id="memorials" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Memorials</h4>
      </div>
      <div class="modal-body">
	  
       <?php
	   	echo"<table border='0' width='70%'>";
		
	while($row3 = mysqli_fetch_row($result3))      //  while there are rows available
	{
		echo"<tr>
		<tr><td align='left' colspan='3'><strong>".$row3[1]."</td></tr>
		<tr><td colspan='3'></br></td></tr>
		<tr><td align='right'><strong>Added by:&nbsp;</strong></td>
		<td align='left'>".$row3[0]."</td>
		<td align='right'><strong>".$row3[2]."</strong></td>
		</tr>
		<tr><td colspan='3'></br></td></tr>
		<tr><td colspan='3'></br></td></tr>
				
		";
				
	};
	echo"</table>";
	?>
	   
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Stories Modal -->
<div id="stories" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Stories</h4>
      </div>
      <div class="modal-body">
        
		<?php
	   	echo"<table border='0' width='70%'>";
		
	while($row4 = mysqli_fetch_row($result4))      //  while there are rows available
	{
		echo"<tr>
		<tr><td align='left' colspan='3'><strong>".$row4[1]."</td></tr>
		<tr><td colspan='3'></br></td></tr>
		<tr><td align='right'><strong>Added by:&nbsp;</strong></td>
		<td align='left'>".$row4[0]."</td>
		<td align='right'><strong>".$row4[2]."</strong></td>
		</tr>
		<tr><td colspan='3'></br></td></tr>
		<tr><td colspan='3'></br></td></tr>
				
		";
				
	};
	echo"</table>";
	?>
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Facts Modal -->
<div id="facts" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Facts</h4>
      </div>
      <div class="modal-body">
       
	   <?php
	   	echo"<table border='0' width='70%'>";
		
	while($row6 = mysqli_fetch_row($result6))      //  while there are rows available
	{
		echo"<tr>
		<tr><td align='left' colspan='3'><strong>".$row6[1]."</td></tr>
		<tr><td colspan='3'></br></td></tr>
		<tr><td align='right'><strong>Added by:&nbsp;</strong></td>
		<td align='left'>".$row6[0]."</td>
		<td align='right'><strong>".$row6[2]."</strong></td>
		</tr>
		<tr><td colspan='3'></br></td></tr>
		<tr><td colspan='3'></br></td></tr>
				
		";
				
	};
	echo"</table>";
	?>
	   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Links Modal -->
<div id="links" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Links</h4>
      </div>
      <div class="modal-body">
	  
       <?php
	   	echo"<table border='0' width='70%'>";
		
	while($row7 = mysqli_fetch_row($result7))      //  while there are rows available
	{
		echo"<tr>
		<tr><td align='left' colspan='3'><strong>Link: <a href='".$row7[1]."'>".$row7[0]."</a></td></tr>
		<tr><td colspan='3'></br></td></tr>";
		if(!empty(trim($row7[3]))){
		echo"<tr><td align='left' colspan='3'><strong>".$row7[3]."</td></tr>
		<tr><td colspan='3'></br></td></tr>";
		}
		echo"<tr><td align='right'><strong>Added by:&nbsp;</strong></td>
		<td align='left'>".$row7[2]."</td>
		<td align='right'><strong>".$row7[4]."</strong></td>
		</tr>
		<tr><td colspan='3'></br></td></tr>
		<tr><td colspan='3'></br></td></tr>
				
		";
				
	};
	echo"</table>";
	?>
	   
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




</div>



</div>


</td></tr></table>



</div></div></div>


</div> <!-- End Deceased Profile Contents -->





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
