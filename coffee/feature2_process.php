<?php
$title = "Feature2-process data";
$css = 'styles_XiongNi.css';
include 'header.php'; ?>

<?php
// what to do with the data
if(isset($_POST['reservationSubmit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $numOfPeople = $_POST['numOfPeople'];
    $date = $_POST['date'];
    $specialReq = $_POST['specialReq'];

    //connect to the database server
    include 'feature2_db.php';

    // write sql statement to insert data
    $sql = "insert into feature2_reservform (name, email, numOfPeople, date, specialReq)
    values('$name', '$email', '$numOfPeople', '$date', '$specialReq')";

if($conn -> query($sql) === TRUE){
    echo "Your data was recorded";
}else{
    echo "Error: ".$sql."<br>".$conn->error;
}

//close the databse connection
$conn -> close();

}

?>


<?php include 'footer.php'; ?>