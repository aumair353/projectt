<?php

require_once ("connection.php");

//$ccid=$_GET['id'];
$name=$_GET['name'];
$pic=$_GET['pic'];

echo  $name;
echo $pic;

$sql = "insert into cart values ('$name','$pic','$id')";
$result = $conn->query($sql);
header("location:index.php");

?>