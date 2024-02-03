<?php 
$title ="Web Programming-Task3";
include'header.php'; 
?>

<h3>3.2 Form Creation: Create a simple HTML form to collect the user's Firstname and Lastname. 
    Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” 
    inside an h3 tag.</h3>
<h3>3.3 Bootstrap Styling: Apply Bootstrap styles to the form. 
    Make sure to include the Bootstrap CSS link in your head tag.</h3>

<div class="row">
    <h4>Please input your firstname and lastname: </h4>
    <form method="post" name="user_reg_form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name" 
            name="fname" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" 
            name="lname" required>
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div> <!--class = row-->


<!--process the data at the same page-->
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    echo "Hello ". $fname." " .$lname. "<br>you are welcome to my site.";  
}
?>

<h3>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h3>

<?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
?>
<table class="table table-striped table-hover">
    <tr><th>S.n.</th> <th>Name</th> <th>Grade</th></tr>
        <tr>
            <td>1</td> 
            <td>John</td> 
            <td><?php echo $g1 ?></td> 
        </tr>
        <tr>
            <td>2</td> 
            <td>Alice</td> 
            <td><?php echo $g2 ?></td> 
        </tr>
        <tr>
            <td>3</td> 
            <td>Bob</td> 
            <td><?php echo $g3 ?></td> 
    </tr>
</table>

<h3>3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";).
    Join them together and print the length of the string.</h3>
<?php
    //set the variables
    $str1 = "Hello";
    $str2 = "World";

    //Join them together
    $text = $str1." ".$str2." !";
    echo "$text<br>";

    // print the length of the string
    echo $text."'s length of the string is ".strlen($text);
?>

<h3>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and an echo statement to output your answer.</h3>

<?php
$first_number = 298;
$second_number = 234;
$third_number = 46;
$sum_total = $first_number + $second_number + $third_number;

echo $first_number." + ".$second_number. " + ".$third_number. " = ".$sum_total;
?>

<h3>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
    Hint: Use predefined variables: $_SERVER.</h3>

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, "Edge") === TRUE) {
    $browser = "Microsoft Edge";
} elseif (strpos($user_agent, "Firefox") === TRUE) {
    $browser = "Mozilla Firefox";
} elseif (strpos($user_agent, "Safari") === TRUE) {
    $browser = "Safari";
} elseif (strpos($user_agent, "Chrome") === TRUE) {
    $browser = "Google Chrome";
} else {
    $browser = "Other browser";
}

echo "Your browser is: $browser";
?>

<h3>3.8 File Modification Time: Write a PHP script in the footer section of your universal footer 
    to display the last modification time of a file. Hint: Use predefined variable $_SERVER, 
    basename function  to get the filename , filetime function to get 
    the last modified time & date function to print the date and time</h3>



<?php include'footer.php'; ?>