<?php
/* Program: add-deceased.php
* Application script for the Adding
* Deceased details to database
*/

session_start(); 

require '../../config.inc'; 

$sname=$_POST['DeceasedSurname'];
$fnames=$_POST['DeceasedForenames'];
$bdate=$_POST['DeceasedBirthDate'];
$ddate=$_POST['DeceasedDeathDate'];
$age=$_POST['DeceasedAge'];
$daddr=$_POST['DeceasedAddress'];
$dtown=$_POST['DeceasedTown'];
$darea=$_POST['DeceasedArea'];
$dcountry=$_POST['DeceasedCountry'];
$memid=$_SESSION['memberid'];
$cdate= strftime("%F");


$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 



//add record to database


$query = "INSERT INTO `deceased` (`surname`, `firstnames`, `birth-date`, `death-date`, `age`, `lived-at`, `town`, `area`, `country`, `member-id`, `created-date`) VALUES ('$sname', '$fnames', '$bdate', '$ddate', '$age', '$daddr', '$dtown', '$darea', '$dcountry', '$memid', '$cdate');";  // sets up sql query
$result = mysqli_query($conn, $query) or die("Invalid Add deceased Query"); // runs query using open connection



mysqli_close($conn); // close database connection


// redirect to member profile page

header('Location: ../../members/');


?>