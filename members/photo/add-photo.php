<?php
/* Program: add-photo.php
* Application script for the Adding
* and uploading a photo to database
*/

session_start(); 

require '../../config.inc';


$deceasedid=$_POST['DeceasedId'];


$_SESSION['deceasedid']= $deceasedid;
 

$conn = mysqli_connect($host, $user, $pwd) or die("No connection");
mysqli_select_db($conn, $dbname) or die("Database will not open");   // opens database 


// uploaded filename 
$file_name = basename($_FILES["ufile"]["name"]);

// random 4 digit to add to file name 
$random_digit=rand(0000,9999);

//combine random digit to you file name to create new file name
$new_file_name=$random_digit.$file_name;

//set where to store files
$path= "upload/".$new_file_name;

if($ufile !=none)
{

if(move_uploaded_file($_FILES["ufile"]["tmp_name"],$path)){

$query = "INSERT INTO `db723001833`.`photo` (`deceased-id`, `filename`) VALUES ('$deceasedid', '$new_file_name');";  // sets up sql query
$result = mysqli_query($conn, $query) or die("Invalid Add Memorial Query"); // runs query using open connection

mysqli_close($conn); // close database connection

header('Location: ../deceased-profile/');

}else{
	
header('Location: ../deceased-profile/');	
	
}else{

header('Location: ../deceased-profile/');	
	
}
}

?>