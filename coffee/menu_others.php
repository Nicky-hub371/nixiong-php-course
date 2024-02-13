
<?php
include 'menu_db.php';

$sql = 'SELECT * FROM menu WHERE (type_name = "others")';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
    echo "<div class = 'part5'>";
    while($row = $result->fetch_assoc()) {
       
       echo "<div>";
       echo '<img src="file/' . $row["picture"] . '" width = 200  margin-bottom: 10px >';
       echo "<p>" . $row["name_menu"] . "</p>";
       echo "<p>Price: $" . $row["price"] . "</p>";
       echo "</div>";
    }echo "</div>";
} else {
    echo "</br> No menu here!<br>";
}
$conn->close();
?>
