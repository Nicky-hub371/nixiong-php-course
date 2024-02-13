<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
session_start();
if(isset($_SESSION['user_id'])) {
    ob_clean();
    header("Location: HomePage.php");
    exit();
}
?>
<?php
$title = "Log_In";
$md="Please use appropriate meta Description";
$css="styles_YangPengpeng.css";
include 'header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('db.php');

    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

    $query = "SELECT * FROM register_info WHERE email='$email'";
    $result = $conn->query($query);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if(password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: HomePage.php");
            exit();
        } else {
            $error = "Error: Invalid email or password";
        }
    } else {
        $error = "Error: Invalid email or password";
    }

    $conn->close();
}

?>

<?php include 'footer.php'; ?>