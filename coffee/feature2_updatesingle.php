<?php
$title = "Feature 2-update date";
$css = 'styles_XiongNi.css';
include'header.php'; 
include 'feature2_db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM feature2_reservform WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<h2> Update your information below: </h2>

<form name="reservation" method="post" action="">
<div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="name">Your Full Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" 
                    name="name" required value="<?php echo $row['name']; ?>">
                </div>
                <div class="col">
                    <label for="email">Your Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" 
                    name="email" required value="<?php echo $row['email']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="numOfPeople">Number of People:</label>
                    <input type="number" class="form-control" id="numOfPeople" 
                    placeholder="Enter number of people" name="numOfPeople" required value="<?php echo $row['numOfPeople']; ?>">
                </div>
                <div class="col">
                    <label for="date">Your Date:</label>
                    <input type="date" class="form-control" id="date" 
                    name="date" required value="<?php echo $row['date']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="specialReq">Your Special Requests:</label>
                    <textarea type="text" class="form-control" id="specialReq" placeholder="Enter your special requests" 
                    name="specialReq" style="height: 100px" value="<?php echo $row['specialReq']; ?>"></textarea>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col"><button type="submit" class="btn btn-primary" name="updatesubmit">Update your Information</button></div>
        <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
    </div>
</form>
<?php 
/* 
The isset() function is used to check if a variable is set and not NULL.
 In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['updatesubmit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = mysqli_query($conn,"UPDATE feature2_reservform set name='$name', email='$email' where id='$a'");
    if($query){
        echo "<h2>Your information is updated Successfully</h2>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
    }

    if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM feature2_reservform where id='$a'");
        if($query){
            echo "Record Deleted with id: $a <br>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not Deleted";}
        }

$conn->close();

?>
<?php include'footer.php'; ?>