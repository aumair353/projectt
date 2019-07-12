<?php

session_start();
 //echo $_SESSION['id'];
 $u_id=$_SESSION['id'];

     require_once ("connection.php");

     $pid= $_POST['pid'];
     $rating=$_POST['check'];
     $comment=$_POST['comment'];

     $cid= $_POST['c_id'];
     date_default_timezone_set("Asia/Karachi");
     $date= date("Y-m-d h:i:sa");

    // echo $u_id;
    // echo $pid;
     //echo $rating;
     //echo $comment;
     //echo $date;

$sql = "insert into reviews (user_id,product_id,rating,comments,date_added) values ('$u_id','$pid','$rating','$comment','$date')";
$result = $conn->query($sql);

if($result){
    echo "success";
}
else
    echo "failed";

header("location:product-detail.php?id=$cid");


?>