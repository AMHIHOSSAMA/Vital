<?php 
session_start();
$DBserver = "localhost";
$username = "root" ;
$password = "" ;
$DBname = "cosmitic-shopping" ;

$connection = mysqli_connect($DBserver, $username, $password, $DBname) ;


?>