<?php
/* Program: add-notice.php
* Application script for the Adding
* Funeral Notice to database
*/

session_start(); 

require '../../config.inc';

$memid=$_SESSION['memberid'];
$deceasedid=$_POST['DeceasedId'];
$fudate=$_POST['FuneralDate'];
$futime=$_POST['FuneralTime'];
$fulocation=$_POST['FuneralLocation'];
$fudetails=$_POST['FuneralDetails'];

$_SESSION['deceasedid']= $deceasedid;
 

$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 



//add record to database


$query = "INSERT INTO `db723001833`.`notice` (`deceased-id`, `member-id`, `funeral-date`, `funeral-time`, `location`, `details`) VALUES ('$deceasedid', '$memid', '$fudate', '$futime', '$fulocation', '$fudetails');";  // sets up sql query
$result = mysqli_query($conn, $query) or die("Invalid Add Notice Query"); // runs query using open connection



mysqli_close($conn); // close database connection


// redirect to deceased profile page

header('Location: ../deceased-profile/');



?>