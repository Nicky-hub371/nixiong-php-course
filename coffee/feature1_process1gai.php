<?php
//session_start();
$title = "Log_In";
$md="Please use appropriate meta Description";
$css="styles_YangPengpeng.css";
include 'header.php'; ?>
<?php
session_start();
// if my customer already registered
if(isset($_SESSION['user_id'])) {
    header("Location: HomePage.php");
    exit();
}

// check
if(isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
 
    include 'db.php';

    $sql = "SELECT * FROM register_info WHERE email = '$email'";
    $result = $conn->query($sql);

    // if customer exist
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if(password_verify($password, $row['password'])) {
            // password correct
            $_SESSION['user_id'] = $row['id'];
            // go to the HomePage
            header("Location: HomePage.php");
            exit();
        } else {
            // password incorrect 
            $error = "Error: Invalid email or password";
        }
    } else {
        // no customer info
        $error = "Error: Invalid email or password";
    }

    
    $conn->close();
}
?>



<?php include 'footer.php'; ?>