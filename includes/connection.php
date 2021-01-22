<?php
//Execute code only when the form has been submitted
if(isset($_POST['submit'])){
//connect to the server
$servername= $_SESSION['servername'];
$username= $_SESSION['username'];
$password= $_SESSION['password'];
$dbname = $_POST['dbname'];
$deldb = $_POST['deldb'];
$conn= new mysqli($servername, $username, $password);
if($conn->connect_error){
die(include(dirname(__FILE__).'/includes/verify.php'));
}
}
?>