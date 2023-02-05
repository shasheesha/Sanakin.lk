<?php
$servername = "localhost";
$username = "root";
$password = "";
$usersdatabase = "db_sanakin_lk";

function userCreate(){
    $sql = "INSERT INTO problems (userId, problem, contactType, contactDetail) 
        VALUES ( " . $_SESSION['user_id'] . ", '" . $msg . "', '" . $contactType . "', '" . $contactValue . "');";

        if (mysqli_query($con, $sql)) {
            echo "<script> console.log('Record updated successfully'); </script>";
            header('location:problems.php');
        } else {
            echo "Error updating record: " . $con->error;
        }
    
}
?>