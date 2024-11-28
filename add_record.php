<?php
require "php_sql.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    $sql = "INSERT INTO users (name) VALUES ('$name')";

    if (!empty($conn)) {
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Błąd:" . $sql . '<br>' . $conn->error;
        }
    }
}
$conn->close();