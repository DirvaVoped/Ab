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
else
{
    echo "Csatlakozas megtortent";
}

$sql= "Drop database if not exists emberek";
if($conn->query($sql) === true)
{
    echo"Sikeres tablarorles";
}
else
{
    echo "Nem sikerult a tablatorles";
}
$sql="";
$sql="CREATE TABLE if not EXISTS emberek(
    id INT unsigned AUTO_INCREMENT PRIMARY KEY,
    vezeteknev VARCHAR(50) NOT NULL,
    keresztnev VARCHAR(50) not null,
    beosztas VARCHAR(50) not null,
    regiszt_datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";
if($conn->query($sql) === true)
{
    echo"Sikeres tablarorles";
}
else
{
    echo "Nem sikerult a tablatorles";
}


$conn->close();