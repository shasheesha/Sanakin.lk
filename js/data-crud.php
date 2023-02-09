<?php
include "../functions/email-functions.php";
include "../connectors/db-connector.php";
// $conn = mysqli_connect('localhost', 'root', '', 'test');

// extract($_POST);
// if(isset($_POST['newEmail'])){
//     $_SESSION['newEmail'] = $_POST['newEmail'];
//     echo"<script>console.log('Record updated successfully);</script>";
// }

// $email = $_POST['inputData'];
// $username = $_POST['newEmail'];
// $password = $_POST['newPassword'];
// $query = "
// INSERT INTO users 
// (email) 
// VALUES (".$email.")
// ";

// $statement = $conn->prepare($query);

// $data = '';

// foreach($_POST as $k => $v) {
//     if(empty($data)) {
//         $data .= "$k ='$v'";
//     } else {
//         $data .= ", $k='$v'";
//     }
// }


// $sql = "INSERT INTO users set $data";
// $results = mysqli_query($connection, $sql);

// if($results) {
//     echo "Data Submitted Successfully";
// } else {
    // echo "Data submission has failed, Please Try Again"+ $_SESSION['newEmail'];
    
// }








// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "test";

// $conn = new mysqli($servername, $username, $password, $database);
try {
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "<script>console.log ('Connected successfully.')</script>";
} catch(Exception $error) {
  echo "Connection failed: " . $error->getMessage();
}


  $inputData = $_POST['inputData'];
  echo "The input data is: " . $inputData;

  $sql = "INSERT INTO users (username, email, password) 
  VALUES ('blank', '". $inputData . "', 'blankpass');";

  if (mysqli_query($conn, $sql)) {
      echo "<script> console.log('Record updated successfully'); </script>";
    //   header('location:problems.php');
    emailVerificationSend($inputData);
  } else {
      echo "Error updating record: " . $conn->error;
  }
?>
