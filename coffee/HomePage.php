<?php
session_start();
if(isset($_SESSION['user_id'])) {
    header("Location: HomePage.php");
    exit();
}
?>


<?php
$title = "Home Page";
$md="Please use appropriate meta Description";
$css="styles_YangPengpeng.css";
include 'header.php'; ?>


<div class="word">
            <p class="big">Good Coffee, Good Taste, For Good People</p>
            <p class="small">Here in this cold winter season, you can get a great cup of coffee in your hand and talk
                with your friends.</p>
            <button class="button2"><a href="#" class="link">Read More</a></button>
        </div>
        <div class="coffee"></div>

<?php include 'footer.php'; ?>

<!--
提交project之前会改成index.php
-->