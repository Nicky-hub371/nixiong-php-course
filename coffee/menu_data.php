<?php 
$title = "menu";
$css = "styles-QiaoqiaoZou.css";
include_once 'header.php';?>

<div class =container>
<?php
include 'menu_db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM menu";

// Execute the SQL query and store the result
$result = $conn->query($sql);
echo ' <div class="col">
          <button type="button" class="btn btn-primary"><a href="menu_add.php" style = "color: white;"> add more menu</a></button>
          <button type="button" class="btn btn-primary"><a href="menu.php" style = "color: white;"> go to the menu website</a></button>
       </div>';
// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pictures</th>
                    <th>Menu Name</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row["id"]}</a></td>
                <td><img src='file/{$row["picture"]}' style='width: 50px; margin-bottom: 10px;'></td>
                <td>{$row['name_menu']}</td>
                <td>{$row['price']}</td>
                <td>{$row['type_name']}</td>
                <td><a href='menu_update.php?id=$row[id]'> update </a></td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>
</div>
<?php 
include "menu_footer.php";
?>