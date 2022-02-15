<?php


$host = "localhost";
$user = "root";
$pass = "";
$db = "janureapp";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error){
    echo "Connection Failed";
    die;
}
 ?>