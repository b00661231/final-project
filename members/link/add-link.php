<?php
/* Program: add-link.php
* Application script for the Adding
* a Link to database
*/

session_start(); 

require '../../config.inc';

$memname=$_POST['display-name'];
$deceasedid=$_POST['DeceasedId'];
$memmessage=$_POST['reason'];
$linkdescription=$_POST['linkdescription'];
$linkurl=$_POST['linkurl'];
$reason=$_POST['reason'];
$cdate=$_POST['create-date'];

$_SESSION['deceasedid']= $deceasedid;
 

$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 


//add record to database


$query = "INSERT INTO `db723001833`.`Link` (`member-name`, `deceased_ID`, `Link_Text`, `Link_Ref`, `Reason`, `creation-date`) VALUES ('$memname', '$deceasedid', '$linkdescription', '$linkurl', '$reason', '$cdate');";  // sets up sql query
$result = mysqli_query($conn, $query) or die("Invalid Add Link Query"); // runs query using open connection



mysqli_close($conn); // close database connection


// redirect to deceased profile page

header('Location: ../deceased-profile/');



?>