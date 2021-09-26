<?php
$conn = new mysqli("web_mysql", "root", "pwd123", "test");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM name";
$result = $conn->query($sql);
while($row = $result->fetch_array()){
    echo $row["name"];
  }
$conn->close();