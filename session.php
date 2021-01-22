<?php session_start();
$_SESSION['sname'] = $_POST['sname'];
$_SESSION['servername'] = $_POST['servername'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
?>
<?php include(dirname(__FILE__)."/template/header.phtml");?>
<header>
<span>RoutDB</span>
</header>
<div id="errors">
</div>
<form name="routdbForm" onsubmit="return authForm()"class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label>Session Name</label> <br>
<input type="text" name="sname">
<br>
<label>Server Name</label><br>
 <input type="text" name="servername">
<br>
<label>Username</label><br>
 <input type="text" name="username">
<br>
<label>Password</label> <br>
<input type="text" name="password">
<br>
<input class="submit" id="submit" type="submit" value="CREAT SESSION">
</form>
<div id="helpbox"><a href="#" onclick="openHelp()">HELP <i class="fa fa-question-circle"></i></a></div>
<div class="pop-up" id="pop-up">
<div id="pop-content">
<h5 style="text-align:center;text-decoration:underline;">What is RoutDB session used for</h5>
<p>RoutDB session is used to create a secured and encrypted environment, to start using RoutDB, you need
to create a session that will enable you to get access to the database areas. Note that you need
to provide a valid database credentials.</p>
<ul>
<li><b>Session Name:</b> Referes to the unique identification to create a secured environment,
you can name your session with whatever name you want, it could be your name or any other object.
</li>
<li><b>Server Name:</b> Referes to your server address, if you're running RoutDB on 
a local server, by default it is usually "localhost".
</li>
<li><b>Username:</b> Referes to your server username, if you're running RoutDB on 
a local server, by default it is usually "root". 
</li>
<li><b>Password:</b> Referes to your server password.
</li></ul>
<p>To enable RoutDB communicate with your server, please provide the correct
details of your server. </p>
<p>For more help visit the <a href="https://github.com/Raphaeltrust/routdb">Documentation</a></p>
</p>
<button onclick="closeHelp()">Close</button>
</div></div>
<?php 
/*** Check if the user have created a session, if the user
have already created a session, redirect them to the homepage
**/ 
if(isset($_SESSION['sname'])){
header("location: index.php");
exit();
}
if(isset($_SESSION['servername'])){
header("location: index.php");
exit();
}
if(isset($_SESSION['username'])){
header("location: index.php");
exit();
}
if(isset($_SESSION['password'])){
header("location: index.php");
exit();
}
?>
<script src="template/js/main.js"></script>
