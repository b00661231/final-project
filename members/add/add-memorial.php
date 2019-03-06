<?php
/* Program: add-memorial.php
* Application script for the Adding
* a Memorial message to database
*/

session_start(); 

require '../../config.inc';

$memname=$_POST['display-name'];
$deceasedid=$_POST['DeceasedId'];
$memmessage=$_POST['message'];
$cdate=$_POST['create-date'];
$messagetype=$_POST['message-type'];

$_SESSION['deceasedid']= $deceasedid;
 

$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 



//add record to database


$query = "INSERT INTO `db723001833`.`memorial` (`member-name`, `deceased-id`, `Entry_Type`, `message`, `creation-date`) VALUES ('$memname', '$deceasedid', '$messagetype', '$memmessage', '$cdate');";  // sets up sql query
$result = mysqli_query($conn, $query) or die("Invalid Add Memorial Query"); // runs query using open connection



mysqli_close($conn); // close database connection


// redirect to deceased profile page

header('Location: ../deceased-profile/');



?>