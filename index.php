<?php include(dirname(__FILE__)."/includes/auth.php");?>
<?php
$host = $_SESSION['servername'];
$user = $_SESSION['username'];
$password = $_SESSION['password'];
$conn= new mysqli($host, $user, $password);
if($conn->connect_error){
die(include(dirname(__FILE__).'/includes/verify.php'));
}
?>
<?php
  include(dirname(__FILE__)."/template/header.phtml");
?>
<?php
  include(dirname(__FILE__)."/includes/navigation.phtml");
?>
<?php 
/*Attempt a connection to the server if the user have provided
the correct details*/

$result = mysqli_query($conn,"SHOW DATABASES"); 
while ($row = mysqli_fetch_array($result)) { 
    /*echo $row[0]."<br>";*/ 
}
?>
<div id="container">
<div id="home-btn"><a href="create.php"><button>New Database <i class="fa fa-plus-circle"></i></button></a> <a href="database.php"><button>Manage Databases <i class="fa fa-globe"></i></button></a>
</div>
<div id="col2">
<div class="serverInfo">
<h2>RoutDB INFO</h2>
<?php
echo "<p><span>SESSION NAME:</span>"." ". $_SESSION['sname']. "</p>";
echo "<p><span>USERNAME:</span>"." ". $_SESSION['username']. "</p>";
echo "<p><span>VERSION:</span> 1.0.0</p>";
echo "<p>". "<span>"." DEVICE INFO:"." </span>"." ". $_SERVER['HTTP_USER_AGENT'] . "</p>";	

?>
</div>
<div class="serverInfo"><h2>SERVER INFO</h2>
<?php
echo "<p><span>GATEWAY INTERFACE:</span>"." ". $_SERVER['GATEWAY_INTERFACE']. "</p>";
echo "<p><span>SERVER ADDRESS:</span>"." ". $_SERVER['SERVER_ADDR'] . "</p>";
echo "<p><span>SERVER NAME:</span>"." ". $_SERVER['SERVER_NAME'] . "</p>";	
echo "<p><span>SERVER SOFTWARE:</span>"." ". $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p><span>SERVER PROTOCOL:</span>"." ". $_SERVER['SERVER_PROTOCOL'] . "</p>";
echo "<p><span>HTTP HOST</span>"." ". $_SERVER['HTTP_HOST'] . "</p>";	
echo "<p><span>SERVER HTTPS:</span>"." "; if(!$_SERVER['HTTPS']==true){
echo "SSL is not active"	 . "</p>";}
else{
echo "<span>SSL is Active</span>";
}
echo "<p><span>SERVER REMOTE ADDRESS :</span>"." ". $_SERVER['REMOTE_ADDR'] . "</p>";	
echo "<p><span>SERVER REMOTE PORT:</span>"." ". $_SERVER['REMOTE_PORT'] . "</p>";	
echo "<p><span>SERVER ADMIN INFO:</span>"." ". $_SERVER['SERVER_ADMIN'] . "</p>";	
echo "<p><span>SERVER PORT:</span>". " ".$_SERVER['SERVER_PORT'] . "</p>";	
?></div></div></div>
<script src="template/js/main.js"></script>