<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enabm";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Csatlakozasi hiba". $conn->connect_error);
}
