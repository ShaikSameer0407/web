<?php


$servername="localhost:3306";
$username= "root";
$password= "";

$conn=new mysqli($servername, $username, $password);
if ($conn->connect_error) {
   die("connection failed:". $conn->connect_error);
}
echo "connected succesfully";
$sql = "CREATE DATABASE exp6";
if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
} else {
 echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
