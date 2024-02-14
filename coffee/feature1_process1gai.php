<?php
$title = "Log_In";
$md="Please use appropriate meta Description";
$css="styles_YangPengpeng.css";
include 'header.php'; ?>


<?php

global $conn;
include 'db.php';


//if(isset($_POST['login'])){
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}
echo $email;
$sql = "select email, password from register_info where email = \"$email\" AND password =\"$password\"";

$result = $conn ->query($sql);

if($result -> num_rows >0){
    echo "Welcome ";
}
else{
    echo "get out!";
}

$conn -> close();
?>
<?php include 'footer.php'; ?>