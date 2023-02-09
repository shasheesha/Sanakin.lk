<?php 
function saving($variable){
    $_SESSION["newEmail"] = $variable;
    echo "<script> console.log('Record updated successfully (PHP)- ".$_SESSION["newEmail"]."'); </script>";
    
}

?>