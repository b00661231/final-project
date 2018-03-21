<?php
/* Program: reg_auth.php
* Application script for the Registering
* of a new member.
*/

session_start(); 

require '../config.inc'; 

$uname=$_POST['login_name'];
$pass1=$_POST['login_passwd'];
$pass2=$_POST['retype_passwd'];
$dname=$_POST['dname'];
$cdate= strftime("%F");
$type="basic";

$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 

$query = "SELECT `username` FROM `login` WHERE `username`='$uname'";  // sets up sql query
$result = mysqli_query($conn, $query) or die("Invalid query Username Query"); // runs query using open connection

$num = mysqli_num_rows($result); 


if($num > 0) //login name was found 
{
echo "Username already exists. Please choose another.";
$err="Y";
}
else if (!strcmp($pass1,$pass2)==0) // passwords do not match
{
echo "Passwords do not match. Please retypye.";
$err="Y";
}

// check password strength

if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass1)){
    
} else {
    echo "Your password is not safe, please choose another";
	$err="Y";
}


if (!$err == 'Y') // if no errors write to database and redirect
{


//add record to database

// $epass=md5($pass1); used for encrypting password
$epass=$pass1;

$query2 = "INSERT INTO `login` (`username`, `password`) VALUES ('$uname', '$epass');";  // sets up sql query
$result2 = mysqli_query($conn, $query2) or die("Invalid Login Query"); // runs query using open connection


$query3 = "INSERT INTO `member` (`display-name`, `member-email`, `member-type`, `creation-date`) VALUES ('$dname', '$uname', '$type', '$cdate');";  // sets up sql query
$result = mysqli_query($conn, $query3) or die("Invalid Member query"); // runs query using open connection



mysqli_close($conn); // close database connection

// write session variable with username

$_SESSION['username'] = $uname;
$_SESSION['auth']="basic";

// redirect to register details page

header('Location: ..\members\');
}

mysqli_close($conn); // close database connection



?>