<?php
$mysqli=require __DIR__."/database.php";
$default_role="member";



// var_dump($_POST["email"]);

// if(empty($_POST["email"])){
//   die("email cannot be null");
// }
// if (strlen($_POST["email"])>= 5){
//   die("email cannot be more than 5 letters");
// }

// homework find how to hash password and
//send hash password to database.
//do not send user-written string password to db.
//function based. no over engineering

$user_sql="INSERT INTO users(role,
firstName,
lastName,
phoneNumber,
email,
gender,
ic,
pass,
birthday)
VALUES(?,?,?,?,?,?,?,?,?)";


$statement=$mysqli->stmt_init();

if (!$statement->prepare($user_sql)) {
  die("sql error". $mysqli->error);
}
$pass="";

if (isset($_POST["pass"])) {
  $pass=  $_POST["pass"];
}

$hash=password_hash($pass, PASSWORD_DEFAULT);

$statement->bind_param("ssssssssb",
$default_role, $_POST['firstName'],
$_POST['lastName'], $_POST['phoneNumber'],
$_POST['email'], $_POST['gender'], $_POST['ic'],
$hash, $_POST['birthday']);



if($statement->execute()){
  echo("successful");
  exit;
}


?>
