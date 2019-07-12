<?php

$server_name="localhost";
$username="root";
$password="";
$db="primestore";
$conn  = new mysqli($server_name, $username, $password, $db);

if($conn->connect_error){
   // echo "failed";
}
else{
  //  echo "Connection Successfully";
}

echo "<br>";

/*$sql="create database primestore";
if($conn->query($sql)){
    echo "database created";
}
else{
    echo "database not created";
}
*/

/*$sql="CREATE TABLE categories (
id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (id))";
if($conn->query($sql)){
    echo "Category table created";
}
else {
    echo "table not created";
}*/

/*$sql="CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  email varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  password varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  address varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  type varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  shop_title varchar(255) CHARACTER SET latin1 DEFAULT NULL COMMENT 'it would be set only when type would be ''seller''',
  PRIMARY KEY (id),
  UNIQUE KEY email_UNIQUE (email)
)";
if($conn->query($sql)){
    echo "Users table created";
}
else {
    echo "table not created";
}*/

/*$sql="CREATE TABLE products (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255),
  price float NOT NULL,
  description longtext,
  date_added datetime DEFAULT NULL,
  status tinyint(4) NOT NULL DEFAULT '0',
  user_id int(11) NOT NULL,
  category_id int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY category_id_fk_idx (category_id),
  KEY user_id_fk_idx (user_id),
  CONSTRAINT category_id_fk FOREIGN KEY (category_id) REFERENCES categories (id),
  CONSTRAINT user_id_fk FOREIGN KEY (user_id) REFERENCES users (id))";
if($conn->query($sql)){
    echo "Products table created";
}
else {
    echo "table not created";
}*/

/*$sql="CREATE TABLE pictures (
  id int(11) NOT NULL AUTO_INCREMENT,
  product_id int(11) DEFAULT NULL,
  picture_file_name varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  is_main_picture tinyint(4) DEFAULT '0',
  PRIMARY KEY (id),
  KEY product_id_idx (product_id),
  CONSTRAINT product_id_fk FOREIGN KEY (product_id) REFERENCES products (id)
) ";
if($conn->query($sql)){
    echo "Pictures table created";
}
else {
    echo "table not created";
}*/

/*$sql="CREATE TABLE reviews (
  id int(11) NOT NULL,
  user_id int(11) DEFAULT NULL,
  product_id int(11) DEFAULT NULL,
  rating int(11) DEFAULT NULL COMMENT 'value from 1 to 5',
  comments longtext,
  date_added datetime DEFAULT NULL,
  PRIMARY KEY (id),
  KEY user_id_fk_idx (user_id),
  KEY product_id_fk_idx (product_id),
  CONSTRAINT fk_product_id FOREIGN KEY (product_id) REFERENCES products (id),
  CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users (id)
)";
if($conn->query($sql)){
    echo "Reviews table created";
}
else {
    echo "table not created";
}*/

?>