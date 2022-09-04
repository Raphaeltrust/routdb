<?php
// Destroy user session and redirect to session creation page now
session_start();
session_destroy();
header("Location: session.php");
?>