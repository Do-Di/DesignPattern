<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="testk6";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$incomingContentType=$_SERVER['CONTENT_TYPE'];
$data = file_get_contents("php://input");
$decoded=json_decode($data,true);
var_dump($decoded);
if($decoded['id']=="123")
{
    $sql="INSERT INTO `user`() VALUES ()";
    $conn->query($sql);
}