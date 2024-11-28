<?php
require 'php_sql.php';

$sql = "SELECT id, name FROM users";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<br><br>" . "ID: " . $row["id"] . " - Name:" .
    $row["name"]. " <br>";
    }
} else {
    echo "0 results";
}
$conn->close();