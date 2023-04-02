<?php
$servername="localhost";
$database="project-sanctuary";
$username="root";
$password="";

$mysqli= new mysqli ($servername, $username, $password, $database);

if($mysqli->connect_errno){
    die("connection failed". $mysqli->connect_error);
}
return $mysqli;
