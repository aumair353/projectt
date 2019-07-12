<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Primestore</title>
    <link rel="icon" href="data:image/jpeg;base64,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">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid header_login">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="text-left">Primestore</h1>
            </div>
            <div class="col-md-8">
                <nav class="navbar navbar-expand-sm  navbar-dark">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Log Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <div class="col-md-4">
        <?php
      //  echo "Session:". $_SESSION["id"];
        ?>
    </div>

    <div class="col-md-4">

    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header"><h2>Add Product</h2></div>
            <div class="card-body">
                <form action="new-product.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Title Name" name="title_name">
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input type="text" class="form-control" placeholder="Enter Price" name="price">
                    </div>
                    <div class="form-group">
                        <label>Picture:</label>
                        <input type="file" class="form-control" placeholder="Add Picture" name="picture">
                    </div>
                    <div class="form-group">
                        <label>Category:</label>
                        <select class="form-control" name="category">
                            <option>Men Clothing</option>
                            <option>Men Footwear</option>
                            <option>women Clothing</option>
                            <option>women Footwear</option>
                            <option>Juniors Clothing</option>
                            <option>Juniors Footwear</option>
                            <option>Accessories</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter type" name="type" value="0" hidden>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>

    </div>
</div>
</div>


<?php

require_once("connection.php");
$user_id= $_SESSION["id"];
//echo $user_id;

$category_id;
$product_id;

if(isset($_POST["add"])){
    $category=$_POST['category'];
    $sql= "insert into categories values('$id','$category')";
    $result=mysqli_query($conn,$sql);

    $sql = "SELECT * from categories" . " where name = '$category'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<h1>". $row["id"]. "</h1>";
            $category_id=$row["id"];

        }
    } else {
        echo "0 results";
    }

    $title_name=$_POST['title_name'];
    $price=$_POST['price'];
    $status=$_POST['type'];
   // $usr_id=1;
    $dis="Fine";
    date_default_timezone_set("Asia/Karachi");
    $date= date("Y-m-d h:i:sa");

    echo $title_name;
    echo $price;
    echo "<br>";
    echo $status;
    echo $category_id;

    $sql= "insert into products values('$id','$title_name','$price','$dis','$date','$status','$user_id','$category_id')";
    $result=mysqli_query($conn,$sql);

    $sql = "SELECT * from products" . " where category_id= '$category_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<h1>". $row["id"]. "</h1>";
            $product_id = $row["id"];
        }
    } else {
        echo "0 results";
    }

    echo $product_id;

    $folder_name;
    $sql = "SELECT * from users" . " where id= '$user_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           // echo "id: " . $row["name"]. "<br>";
            $folder_name=$row["name"];
        }
    } else {
        echo "0 results";
    }

    $folder_name="Images";
    echo $folder_name;

    $file_name = $_FILES['picture']['name'];
    $file_type = $_FILES['picture']['type'];
    $tmp_file_at_server = $_FILES['picture']['tmp_name'];
    echo 'File Name : ' . $file_name . '<br/>';
    echo 'File Name : ' . $file_type . '<br/>';
    echo 'Temporarily location at : ' . $tmp_file_at_server . '<br/>';

    if (file_exists($folder_name) && is_dir($folder_name)) {
        echo '<br/>' . $folder_name . ' named folder already exist';
    } else {
        mkdir($folder_name);
        echo '<br/> Folder created with name : ' . $folder_name;
    }

// So folder exists now ...
// To store file with different name, we need file extension, lets get file extension from the file_name
    $file_extension = substr($file_name, strlen($file_name) - 3, 3);
    echo '<br/> File extension is: ' . $file_extension;

    $file_name_at_server = time()."_".$product_id; // Generate a unique file name for the file, using some way e.g. time, random.
    echo "<br/> File name at server : $file_name_at_server <br/>";

    $new_file_path = $folder_name . '/' . $file_name_at_server . '.' . $file_extension;
    echo "<br/> File new path : $new_file_path  <br/>";

    if (is_uploaded_file($tmp_file_at_server)) {
        move_uploaded_file($tmp_file_at_server, $new_file_path);
        echo '<br/> File moved';
    }

    $main_pic=1;

    $sql= "insert into pictures values('$id','$product_id','$file_name_at_server','$main_pic')";
    $result=mysqli_query($conn,$sql);

    header("location: seller_dashboard.php?id=$user_id");
    ob_end_flush();

}

?>

<?php
include("footer.php");
?>

</body>
</html>