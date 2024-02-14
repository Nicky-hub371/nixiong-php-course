<?php 
$title = "menu";
$css = "styles-QiaoqiaoZou.css";
include_once 'header.php';?>

<div class = container><br><br><br>
    <h2>Add A New Dish</h2><br><br>
    <form  name="form1" method="post" action="menu_process.php" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="name" class="form-label">Name Of Dish</label>
            <input type="text" class="form-control" id="name_menu" name = "name_menu" placeholder="name of the dish"  minlength="3" maxlength="30" required>
        </div><br>
        <div class="col-md-4">
            <label for="price" class="form-label">Price</label>
            <input type="number" step = "0.01" class="form-control" id="price" name = " price" placeholder="price" required>
        </div><br>
        <div class="col-md-4">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" class="form-control" id="picture"  name = "picture" accept=".jpg,.jpeg,.png" required>
        </div><br>
        <div class="col-md-4">
            <label for="group" class="form-label">Group</label>
            <select class="form-select" id="type_name" name = "type_name" required>
            <option selected="" disabled="" value="">Choose...</option>
            <option>Coffee</option>
            <option>Dessert</option>
            <option>Bread</option>
            <option>Others</option>
            </select>
        </div><br>
        <div class="col">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div><br>
        <button type="button" class="btn btn-primary"><a href="menu_data.php"style="color: white;" >Menu List</a></button>
        </br><br><br>
        </div>
</div>
<script>
//function to validate name_menu
function validateName(){
const name_menu = document.getElementById("name_menu").value;
const name_menuError = document.getElementById("name_menuError");
if (name_menu.length < 3||name_menu.length>30){
name_menuError.innerHTML= "Menu_name must be between 3&30 characters";
return false;
}
else{
    name_menuError.innerHTML= "";
    return true;
}
}
document.getElementById("menu_name").addEventListener("input",validateName);
</script>
<?php include 'footer.php';?>