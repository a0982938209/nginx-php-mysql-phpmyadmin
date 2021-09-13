<?php
$mysql_hostname = "p:localhost:6608";
$mysql_user = "root";
$mysql_password = "pwd123";
$mysql_database = "test";



$con=mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database); 
        if (!$con) { die("連結錯誤: " . mysqli_connect_error());} 
        mysqli_query($con,"SET NAMES utf8");
echo 'ssss';
exit;
$mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);

if ($mysqli->connect_errno) {
    die("Connect failed: ".$mysqli->connect_error);
}else{
    die("Connect success");
}

$query = "SELECT * FROM name";
$result = $mysqli->query($query);

while($row = $result->fetch_array()){
  echo $row["name"];
}

?>