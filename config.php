<?php 
$servername = "localhost:3306";
$username = "root";
$password = "Blink";
$daname = "mydatabase";


$conn = new mysqli($servername,$username,$password,$daname);

if($conn -> connect_error){
    die("DB connection failed... ERROR = ".$conn -> connect_error);
}


?>