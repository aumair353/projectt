<?php
$server_name="localhost";
$username="root";
$password="";
$db="primestore";
$conn  = new mysqli($server_name, $username, $password, $db);
$data=$_POST["u_name"];
echo $data;
$sql="select * from users where name='$data'";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
		echo " user name is already used";
	}
	else
	{
		echo "user name is available";
	}
?>