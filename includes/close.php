<?php
/*** Destroying the user session ***/
session_start();
session_destroy();
header("Location:seesion.php");
?>