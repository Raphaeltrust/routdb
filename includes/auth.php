<?php
/**** Initialize the session to check if a user have created 
a session, if no session then redirect the user to the section creation page **/
session_start();

if(!isset($_SESSION['sname'])){
header("location: session.php");
}
if(!isset($_SESSION['servername'])){
header("location: session.php");
}
if(!isset($_SESSION['username'])){
header("location: session.php");
}
if(!isset($_SESSION['password'])){
header("location: session.php");
}
?>