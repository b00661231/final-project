<?php
/* File: login_auth.php
* Contains the code for a Web page that verifies
* login details and directs to appropriate page.
*/

session_start(); 
//session_destroy();

require '../config.inc'; 


$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 

$query = "SELECT `username` FROM `login` WHERE `username`='$_POST[MemberEmail]'";  // sets up sql query
$result = mysqli_query($conn, $query) or die("Invalid query"); // runs query using open connection

$num = mysqli_num_rows($result); 


if($num > 0) //login name was found 
	{
	$query2 = "SELECT `username` FROM `login` WHERE `username`='$_POST[MemberEmail]'  AND `password`='$_POST[MemberPassword]'"; 
	// encryption - `password`=md5('$_POST[login_passwd]')
	$result2 = mysqli_query($conn, $query2) or die("Invalid Query2");
	$num2 = mysqli_num_rows($result2); 
	
	
if($num2 > 0) //password matches 
	{


	
	$query3 = "SELECT `member-type` FROM `member` WHERE `member-email`='$_POST[MemberEmail]'"; 
	
	$result3 = mysqli_query($conn, $query3) or die("Query died: fpassword");
	
	$row = mysqli_fetch_row($result3);
	
if ($row[0]=='basic')  
	{
	$_SESSION['auth']='basic';
	header('Location: ../members/');
	}
else if ($row[0]=='paid') 
	{
	$_SESSION['auth']='paid';
	header('Location: ../members/');	
	}
else if ($row[0]=='comm') 
	{
	$_SESSION['auth']='comm';
	header('Location: ../members/');	
	}
else if ($row[0]=='admin') // members login
	{
	$_SESSION['auth']='admin';
	header('Location: ../admin/');	
	}

	} // end password matched
																
else // password does not match
{
echo "The submitted credentials are incorrect. Please try again.";
}

																
} // end login name found

else // login name not found 
{
echo "The submitted credentials are incorrect. Please try again.";
}

mysqli_close($conn);

//} // end if isset
// else
//{
// echo "No Usename Entered, Please Try again.";	
// }



?>