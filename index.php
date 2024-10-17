<?php
include 'db.php';

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"]. "</h2><p>" . $row["content"]. "</p><p>" . $row["date"]. "</p>";
    }
} else {
    echo "0 results";
}
?>
