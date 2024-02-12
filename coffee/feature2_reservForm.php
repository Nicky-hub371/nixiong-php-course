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
                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name" required>
                </div>
                <div class="col">
                    <label for="email">Your Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="numOfPeople">Number of People:</label>
                    <input type="number" class="form-control" id="numOfPeople" placeholder="Enter number of people" name="numOfPeople" required>
                </div>
                <div class="col">
                    <label for="date">Your Date:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="specialReq">Your Special Requests:</label>
                    <textarea type="text" class="form-control" id="specialReq" placeholder="Enter your special requests" 
                    name="specialReq" style="height: 100px"></textarea>
                </div>
            </div>
        </div>
                    <button type="submit" class="btn btn-primary" name="reservationSubmit">Submit</button>
        </form>
    </div> <!--class row-->
</div><!--container-->

<?php include 'footer.php'; ?>