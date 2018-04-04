<?php
/* Program: add-fact.php
* Application script for the Adding
* a Factual reference to database
*/

session_start(); 

require '../../config.inc';

$memid = $_SESSION['memberid'];
$memname=$_POST['display-name'];
$deceasedid=$_POST['DeceasedId'];
$category=$_POST['category'];
$fact=$_POST['factual-info'];
$cdate=$_POST['create-date'];


$_SESSION['deceasedid']= $deceasedid;
 

$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 



//add record to database


$query = "INSERT INTO `db723001833`.`fact` (`deceased-id`, `member-id`, `submitted-by`, `category`, `fact`, `create-date`) VALUES ('$deceasedid', '$memid', '$memname', '$category', '$fact', '$cdate');";  // sets up sql query
$result = mysqli_query($conn, $query) or die("Invalid Add Fact Query"); // runs query using open connection



mysqli_close($conn); // close database connection


// redirect to deceased profile page

header('Location: ../deceased-profile/');



?>