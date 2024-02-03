<?php 
$title ="Web Programming-Task4";
include'header.php'; 
?>
<h3>4.1 Create a file (ex4.php): Create a file named ex4.php in your exercise folder.
    Ensure that it uses the same layout as your other pages and that your navigation bar 
    includes a link to this exercise.</h3>

<h3>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age,
    decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, 
    use form to get user input).</h3>

    <div class="row">
        <h4>Please input your name and choose your age</h4>
        <form method="post" name="user_reg_form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="name" aria-label="name" 
                    name="name" required>
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="age" aria-label="age" 
                    name="age" required>
                </div>
            </div>
                <button type="submit" class="btn btn-primary" value="Check Eligibility">Submit</button>
        </form>

    </div> <!--class = row-->


    <!--process the data at the same page-->
    <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        //collect user input
        $name = $_POST["name"];
        $age = $_POST["age"];

        //check eligibility
        if($age >= 18){
            $message = "Hello ".$name.", you are eligible for voting!";
        }else{
            $message = "Hello ".$name.", you are not eligible for voting!";
        }
        echo $message;  
        }
    ?>

<h3>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the
    following responses, depending on whether it's August or not:
        It's August, so it's still holiday.
        Not August, this is Month-name so I don't have any holidays
    Hint: You can use date(F) function to get the current month name.
    Check Date function from the php manual page.</h3>

    <?php
        //get the current month
        $current_month = date("F");

        //check if it's august
        switch($current_month){
            case"August":
                echo "It's August, so it's still holiday.";
                break;
            default:
            echo "Not August, this is ".$current_month." , so I don't have any holidays.";
            break;
        }
    ?>

<h3>4.4 For Loop: Write a PHP script that will print the multiplication table of a number
    (n, use form to get user input).</h3>
    <div class="row">
        <h4>Please input a number</h4>
        <form method="post" name="user_input_number1" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
            <div class="row mb-3">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Input a number" aria-label="number" 
                    name="number" required>
                </div>
            </div>
                <button type="submit" class="btn btn-primary" value="Generate table">Submit</button>
        </form>
    </div> <!--class = row-->

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $number = $_POST["number"];

        // Print the table
        echo "<h4>Multiplication Table for $number</h4>";
        echo "<table class=\"table table-striped table-hover\">";
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<tr><td>$number x $i</td><td>=</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>

<h3>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n.
    use form to get user input</h3>
    <div class="row">
        <h4>Please input a number</h4>
        <form method="post" name="user_input_number1" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
            <div class="row mb-3">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Input a number" aria-label="number" 
                    name="number" required>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> <!--class = row-->

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $number = $_POST["number"];

        // Print numbers using a while loop
        echo "<h4>Numbers from 1 to $number:</h4>";
        echo "<ul>";
        $j = 1;
        while ($j <= $number) {
            echo "<li>$j</li>";
            $j++;
        }
        echo "</ul>";
    }
    ?>

<h3>3.6 Foreach Loop: Write a PHP script that will print all the elements of an array.
    $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>

    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    foreach($myarray as $elements){
        echo $elements."<br>" ;
    }
    ?>

<?php include'footer.php'; ?>