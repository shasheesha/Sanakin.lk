<?php
// include('php/config.php');
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database);
try {
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "<script>console.log ('Connected successfully.')</script>";
} catch(Exception $error) {
  echo "Connection failed: " . $error->getMessage();
}

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$usersdatabase", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "<script>console.log('Connected to the database successfully!');</script>";
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// } finally {
//     $conn = null;
//     echo "<script>console.log('disconnected to the database successfully!');</script>";
// }



?>