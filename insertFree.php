<?php


require_once "./logb.php";
$username = $_POST["username"];
$password = $_POST["password"];

$insert = $conn->prepare(
    "INSERT INTO freetable(`username`,`password`) VALUES(:username,:password)"
);
$insert->bindParam(":username", $username);
$insert->bindParam(":password", $password);
$insert->execute();


?>