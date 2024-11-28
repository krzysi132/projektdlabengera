<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sterydy.pl";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("chuj ci wdupe nie ma połaczenia: " . $conn->connect_error);
}
echo "dawaj do srodka mordo";
