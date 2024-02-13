<?php
$title = "Feature 2-Make a reservation";
$css = 'styles_XiongNi.css';
include 'header.php'; ?>

<div class="container">
    <div class="row">
        <h2>Make a reservation:</h2>
        <form name="reservation" method="post" action="feature2_process.php">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="name">Your Full Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" 
                    name="name" required minlength="3" maxlength="30">
                    <span id="nameError"></span>
                </div>

                <div class="col">
                    <label for="email">Your Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" 
                    name="email" required>
                    <span id="emailError"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="numOfPeople">Number of People:</label>
                    <input type="number" class="form-control" id="numOfPeople" placeholder="Enter number of people" 
                    name="numOfPeople" required min="1" max="100">
                    <span id="numOfPeopleError"></span>
                </div>

                <div class="col">
                    <label for="date">Your Date:</label>
                    <input type="date" class="form-control" id="date" name="date" 
                    min="<?php echo date('Y-m-d'); ?>" required>
                    <span id="dateError"></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="specialReq">Your Special Requests:</label>
                    <textarea type="text" class="form-control" id="specialReq" placeholder="Enter your special requests" 
                    name="specialReq" style="height: 100px" minlength="2" maxlength="200"></textarea>
                    <span id="specialReqError"></span>
                </div>
            </div>
        </div>
                    <button type="submit" class="btn btn-dark" name="reservationSubmit">Submit</button>
        </form>

        <script>
        // function to validate name
        function validateName(){
            const name= document.getElementById("name").value;
            const nameError = document.getElementById("nameError");

            if(name.length <3 || name.legnth >30){
                nameError.innerHTML = "Name must be between 3 and 30 charaters";
                return false;
            }else{
                nameError.innerHTML = "";
                return true;
            }
        }

        // function to validate email
        function validateEmail(){
            const email= document.getElementById("email").value;
            const emailError = document.getElementById("emailError");

            if(email ==="" || !email.includes("@")){
                emailError.innerHTML = "Please enter a valid email address";
                return false;
            }else{
                emailError.innerHTML = "";
                return true;
            }
        }

        // function to validate number of people
        function validateNumOfPeople(){
            const numOfPeople= document.getElementById("numOfPeople").value;
            const numOfPeopleError = document.getElementById("numOfPeopleError");

            if(numOfPeople<1 || numOfPeople >100){
                numOfPeopleError.innerHTML = "Number of people must between 1 and 100";
                return false;
            }else{
                numOfPeopleError.innerHTML = "";
                return true;
            }
        }

        // function to validate date
        function validateDate(){
            const date= document.getElementById("date").value;
            const dateError = document.getElementById("dateError");

            // to get the input selected date
            const selectedDate = new Date(dateInput.value);

            //get the current date
            const currentDate = new Date();

            // compare the two dates if the selected date is not before the current date
            if (selectedDate < currentDate) {
                dateError.innerHTML = "Selected date must be equal to or later than today.";
            return false;
            } else {
                dateError.innerHTML = "";
            return true;
            }
        }

        // function to special requests
        function validateSpecialReq(){
            const specialReq= document.getElementById("specialReq").value;
            const specialReqError = document.getElementById("specialReqError");

        if(specialReq.length <2 || specialReq.legnth >200){
            specialReqError.innerHTML = "Special requests must be between 2 and 200 charaters";
        return false;
        }else{
            specialReqError.innerHTML = "";
        return true;
        }
        }

        // even listeners for real time validation
        document.getElementById("name").addEventListener("input", validateName);
        document.getElementById("email").addEventListener("input", validateEmail);
        document.getElementById("numOfPeople").addEventListener("input", validateNumOfPeople);
        document.getElementById("date").addEventListener("input", validateDate);
        document.getElementById("specialReq").addEventListener("input", validateSpecialReq);

        </script>

    </div> <!--class row-->
</div><!--container-->

<?php include 'footer.php'; ?>