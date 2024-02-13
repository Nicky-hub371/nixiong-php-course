<?php
$title = "Register";
$md="Please use appropriate meta Description";
$css="styles_YangPengpeng.css";
include 'header.php'; ?>


<div style="height: auto;" class="word">
<form method = "post" action = "feature1_process2.php" id="registrationForm" onsubmit="return validateRegisterForm();">

            <h2 class="logintitle">Registration Form</h2>

            <label style="text-align:center;" class="loginlable" for="fullname">FullName</label>
            <input class="registerinput" type="text" id="fullname" name="fullname" required>

            <label class="loginlable" for="email">Email Address</label>
            <input class="registerinput" type="email" id="email" name="email" required >

            <label class="loginlable" for="password">Password</label>
            <input class="registerinput" type="password" id="password" name="password" required >

            
            <label class="loginlable" for="confirm-password">Confirm Password</label>
            <input class="registerinput" type="password" id="confirm_password" name="confirm-password" required >
        

            <label class="loginlable" for="phone">Phone Number</label>
            <input class="registerinput" type="tel" id="phone" name="phone">

            <button class="registrationbutton" type="submit" name="register">register</button>
            <p></p>
            <p class="terms">By proceeding, you are confirming that you agree to our Terms and Conditions and Privacy
                Policy</p>
</form>
        </div>


<script>
    function validateRegisterForm() {
        var email = document.getElementById("email").value;
        var fullName = document.getElementById("fullname").value;
        var password = document.getElementById("password").value;
        // varify the fullname need to be at least 3 characters 
        if (fullName.length < 3) {
        alert("Please enter a full name with at least 3 characters.");
        return false;
        }
        // verify the email must a email 
        if (!isValidEmail(email)) {
            alert("Please enter a valid email address.");
            return false;
        }
        // Verify that the password is at least 6 characters long
        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            return false;
        }
        return true;
    }

    function isValidEmail(email) {

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

</script>

<?php include 'footer.php'; ?>