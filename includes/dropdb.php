<?php
//Execute code only when the form has been submitted 
if(isset($_POST['submit'])){
/** Attempt to delete a databes if user session details matches database info
**/
$sql= "DROP DATABASE". " ". $deldb;
if($conn->query($sql)==true){
echo "<div class='message'style='background:rgba(0,225,0,0.2);color:green;padding:10px;border-radius:4px;border:1px solid rgba(0,225,0,0.4);'>". "Database"." ". "<b>".$deldb."</b>". " ". "has been deleted successfully.". "</div>";}
else {
echo "<div class='message'style='background:rgba(225,0,0,0.2);color:red;padding:10px;border-radius:4px;border:1px solid rgba(225,0,0,0.4);'>". "Unable to delete database:". " " . $conn->error. "</div>";
}
}

?>