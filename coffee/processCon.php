<?php

global $conn;
include 'db.php';

global $conn;
if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $howtohelp = $_POST['howtohelp'];
    $comment = $_POST['comment'];
}


$sql = "insert into studentsinfo (first_name,last_name,email,howtohelp,comment) 
        values ('$first_name','$last_name','email','$howtohelp','$comment')";

if ($conn-> query($sql)===TRUE){
    echo "Your data was recorded";
}
else{
    echo "Error:" . $sql. "<br>" . $conn->error;
}

//close the database connection
$conn -> close();
?>

?>