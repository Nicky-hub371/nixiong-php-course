<?php 
$title ="Web Programming- task7";
include'../header.php'; 
?>

<?php
$servername = "localhost";
$username = "ni23000";
$password = "2TbIgJyZ";
$dbname = "wp_ni23000";


// create databse connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn -> connect_error){
    die("Connection Failed:". $conn -> connect_error);
}

?>

<?php include'../footer.php'; ?>