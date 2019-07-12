<?php


require_once ("connection.php");
$id=$_GET['id'];
$sql = "delete from cart WHERE id= '$id'";
echo "<br>";

if (mysqli_query($conn, $sql)) {
    echo "Record from cart deleted successfully";
    header("location:cart.php");
} else {
    echo "Error deleting Picture";
}


?>

