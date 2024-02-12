
<?php
$title = "Log_In";
$md="Please use appropriate meta Description";
$css="styles_YangPengpeng.css";
include 'header.php'; ?>

<?php 
/* 
The isset() function is used to check if a variable is set and not NULL. In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
// Check if the form is submitted
if (isset($_POST['login'])) {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Connect to the database server
    include 'db.php';

    // Write a SQL statement to insert data (assuming your table is named 'login_info')
    $sql = "INSERT INTO login_info (email, password) VALUES ('$email', '$password')";

    if($conn->query($sql) === TRUE) {
        echo "New record added";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<?php include 'footer.php'; ?>