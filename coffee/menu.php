
<?php 
$title = "menu";
$css = "styles-QiaoqiaoZou.css";
include_once 'header.php';?>


        <div class="part2">
            <img src="images/12.jpg" class="image menu-img1" />
            <div class="part-menu-text">
                <p class="menu-text">
                    <strong><em>It doesn't matter what kind of coffee we enjoy. It has to be perfect.</em></strong>
                </p>
                <p>According to our philosophy, freshly roasted coffee is the best coffee. Our master roaster roasts each of
                    our coffee qualities slowly, in small batches, at carefully selected temperatures to achieve the best
                    possible aroma. In our coffee shops, we offer freshly roasted filter coffee and various espresso blends.
                </p>
            </div>
        </div>
        <div class="part3">
            <a href="#coffee" class="m1">Coffee</a>
            <a href="#dessert" class="m2">Dessert</a>
            <a href="#bread" class="m3">Bread</a>
            <a href="#others" class="m4">Others</a>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="add" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnCheck1"><a href="menu_add.php" class = "">Add A Dish</a></label>
                <input type="checkbox" class="btn-check" id="list" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnCheck2"><a href="menu_data.php" class = "">Menu List</a></label>
           </div>
        </div>
 

    <p class="c-t" id = "coffee">Coffee</p>
    <?php include_once 'menu_coffee.php';?>
    
    <p class="c-t" id = "dessert">Dessert</p>
    <?php include_once 'menu_dessert.php';?>
    
    <p class="c-t" id = "bread">Bread</p>
    <?php include_once 'menu_bread.php';?>
    
    <p class="c-t" id = "others">Others</p>
    <?php include_once 'menu_others.php';?>



<?php include_once "menu_footer.php";?>