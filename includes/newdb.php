<?php
if(isset($_POST['submit'])){
$sql= "CREATE DATABASE". " ". $dbname;
/** Attempt to create a new database if the user have access to the server ***/
if($conn->query($sql)==true){
echo "<div style='background: rgba(0,225,0,0.2);color:green;padding:10px;border-radius:4px;border:1px solid rgba(0,225,0,0.4);'>" . "Database"." ". "<b>". $dbname. "</b>". " " . "has been created successfully.";}
else {
 echo "<div class='message'style='background:rgba(225,0,0,0.2);color:red;padding:10px;border-radius:4px;border:1px solid rgba(225,0,0,0.4);'>". "Unable to create database". " ". "\"". "<b>". $dbname."</b>". " \"". " " ." :" . " ". $conn->error. " ". " Make sure you are connected to the right server". "</div>";

}
}

?></div>