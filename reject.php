<?php
ob_start();
include ("delete-product.php");
header("location: admin-dashboard.php?id=$u_id");
ob_end_flush();
?>