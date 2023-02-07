<?php 
session_start();
$_SESSION["newEmail"] = "asdasdas";
echo "<script> console.log('Record updated successfully (PHP)- ".$_SESSION["newEmail"]."'); </script>";

?>