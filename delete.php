<?php include(dirname(__FILE__)."/includes/auth.php");?>
<?php require(dirname(__FILE__)."/includes/connection.php");?>
<?php include(dirname(__FILE__)."/template/header.phtml");?>
<?php include("includes/navigation.phtml");?>
<div id="page-title"><span>Dlete Database </span>
</div>
<div id="container">
<?php //include the database creation script
include(dirname(__FILE__)."/includes/dropdb.php");?>
<div id="errors">
</div>
<form class="form" onsubmit="return authDel()" method="post" name="delForm"action="<?php echo $_SERVER['PHP_SELF'];?>">
<label>Database Name </label><input style="border:thin solid #00bfff;margin-top:20px; margin-bottom:15px;height:40px;padding:5px;"type="text" name="deldb">
<input class="submit" type="submit" name="submit" value="DELETE">
</form>
<script src="template/js/main.js"></script>