<?php include(dirname(__FILE__)."/includes/auth.php");?>
<?php include(dirname(__FILE__)."/template/header.phtml");?>
<?php include(dirname(__FILE__)."/includes/navigation.phtml");?>
<?php
// Create a connection to the server
$host = $_SESSION['servername'];
$user = $_SESSION['username'];
$password = $_SESSION['password'];
$conn= new mysqli($host, $user, $password);
/*** Stop the script execution if the connection to the server
 was unsuccessfully, then redirect to verification page
 ***/
if($conn->connect_error){
die(include(dirname(__FILE__).'/includes/verify.php'));
}
?>
<div id="page-title"><span>Available Databases </span>
</div>
<div id="container">
<div class="connected"><span>Connected as <?php echo $_SESSION['servername'];?> <i class="fa fa-check-circle"></i></span>
</div>
<div id="database-row">
<?php 
// fect out the list of available database 
$result = mysqli_query($conn,"SHOW DATABASES"); 
while ($row = mysqli_fetch_array($result)) { 
    echo "<p>". $row[0]. " " . "<a href='delete.php'>". " Delete". " ". "<i class='fa fa-trash'></i>". "</p>"."</a>"; 
}
// Show a message if no database was found
if($result < 0){
echo "No database";
}
?></div>
<!-- Output user details with the disabeld form -->
<form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Server Name <input style="background:#fff;border:none;" type="text" name="servername"value="<?php echo $_SESSION['servername'];?>" disabled>
Username <input style="background:#fff;border:none;"type="text" name="username" value="<?php echo $_SESSION['username'];?>"disabled>
<input style="background:green;"class="submit"type="submit" name="submit" value="CONNECTED AS <?php echo $_SESSION['servername'];?>">
</form>
<script src="template/js/main.js"></script>
</div>