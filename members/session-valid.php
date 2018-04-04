<?php
session_start(); 

// check if member


if ($_SESSION['auth'] == "basic" || $_SESSION['auth'] == "paid" || $_SESSION['auth'] == "comm" || $_SESSION['auth'] == "admin")
{}
else
{
header('Location: ../login/');
exit();
};

?>