<?php
$title = "Feature 2-Read Data";
$css = 'styles_XiongNi.css';
include'header.php'; 
include 'feature2_db.php';
// SQL query to retrieve data from the 'feature2_reservform' table
$sql = "SELECT * FROM feature2_reservform";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number of People</th>
                    <th>Date</th>
                    <th>Special Requests</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='feature2_updatesingle.php?id=$row[id]'>$row[id]</a></td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['numOfPeople']}</td>
                <td>{$row['date']}</td>
                <td>{$row['specialReq']}</td>
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

<?php include 'footer.php'; ?>