<?php include(dirname(__FILE__)."/includes/auth.php");?>
<?php require(dirname(__FILE__)."/includes/connection.php");?>
<?php include(dirname(__FILE__)."/template/header.phtml");?>
<?php include(dirname(__FILE__)."/includes/navigation.phtml");?>
<div id="page-title"><span>Create New Database </span>
</div>
<div id="container">
<?php include(dirname(__FILE__)."/includes/newdb.php");?>
<div id="errors">
</div>
<form class="form" onsubmit="return authDbForm()" method="post" name="dbForm"action="<?php echo $_SERVER['PHP_SELF'];?>">
<label>Database Name </label><input style="border:thin solid #00bfff;margin-top:20px; margin-bottom:15px;height:40px;padding:5px;"type="text" name="dbname">
<input class="submit" type="submit" name="submit" value="CREATE">
</form>
<script src="template/js/main.js"></script>