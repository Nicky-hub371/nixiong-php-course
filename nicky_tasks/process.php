<?php 
$title ="Web Programming- task7";
include'header.php'; 
?>

<?php
// what to do with the data
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    //connect to the databse server
    include 'db.php';

    // write sql statement to insert data
    $sql = "insert into studentsinfo (first_name, last_name, city, groupId)
    values('$fname', '$lname', '$city', '$groupid')";

if($conn -> query($sql) === TRUE){
    echo "Your data was recorded";
}else{
    echo "Error: ".$sql."<br>".$conn->error;
}

//close the databse connection
$conn -> close();

}

?>

<?php include'footer.php'; ?>