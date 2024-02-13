
<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    //$id = $_POST['id'];    
    //$picture = $_POST['picture'];     
    $name_menu = $_POST['name_menu']; 
    $price = $_POST['price']; 
    $type_name = $_POST['type_name'];
    require 'menu_db.php';
    if($_FILES["picture"]["error"] === 4){
        echo
        "<script> alert('Picture Does Not Exist');</script>";
        }else{
            $fileName = $_FILES["picture"]["name"];
            $fileSize = $_FILES["picture"]["size"];
            $tmpName = $_FILES["picture"]["tmp_name"];

            $validPictureExtension = ['jpg','jpeg','png'];
            $pictureExtension = explode('.',$fileName);
            $pictureExtension = strtolower(end($pictureExtension));
            if(!in_array($pictureExtension,$validPictureExtension)){
                echo"<script> alter('Invalid Picture Extension')</script>";
            } else if($fileSize > 2000000){
                echo"<script> alter('Picture Size Is Too Large')</script>";
            } else{
                $newPictureName = uniqid();
                $newPictureNameFinal = $newPictureName ."." . $pictureExtension;

                move_uploaded_file($tmpName, 'file/'.$newPictureNameFinal);
                $sql = "INSERT INTO menu (picture, name_menu, price, type_name)
            VALUES ('$newPictureNameFinal', '$name_menu', '$price' ,'$type_name')";

         // Execute the SQL query using the database connection
        if ($conn->query($sql) === TRUE) {
         // If the query was successful, display a success message
        echo "New record added";
        echo '</br><a href="menu_add.php"> add more menu</a>';
        echo '</br><a href="menu_data.php"> see the menu list</a>';
        } else {
            // If there was an error in the query, display an error message
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    }
   // Close the database connection
   $conn->close();
}
?>

