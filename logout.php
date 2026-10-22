<?php
session_start();
$_SESSION = [];
session_destroy();
header("Location: /projeto/index.php");
exit;
?>
