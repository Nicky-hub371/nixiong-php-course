<?php
$title = "Register";
$md="Please use appropriate meta Description";
$css="styles_YangPengpeng.css";
include 'header.php'; ?>


<div style="height: auto;" class="word">
<form method = "post" action = "feature1_process2.php">

            <h2 class="logintitle">Registration Form</h2>

            <label style="text-align:center;" class="loginlable" for="fullname">FullName</label>
            <input class="registerinput" type="text" id="fullname" name="fullname" required>

            <label class="loginlable" for="email">Email Address</label>
            <input class="registerinput" type="email" id="email" name="email" required>

            <label class="loginlable" for="password">Password</label>
            <input class="registerinput" type="password" id="password" name="password" required>

            
            <label class="loginlable" for="confirm-password">Confirm Password</label>
            <input class="registerinput" type="password" id="confirm-password" name="confirm-password" required>
        

            <label class="loginlable" for="phone">Phone Number</label>
            <input class="registerinput" type="tel" id="phone" name="phone">

            <button class="registrationbutton" type="submit" name="register">register</button>
            <p></p>
            <p class="terms">By proceeding, you are confirming that you agree to our Terms and Conditions and Privacy
                Policy</p>
</form>
        </div>

        
    


<?php include 'footer.php'; ?>