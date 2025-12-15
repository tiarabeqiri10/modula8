<?php

include_once("config.php");

$id=$_GET['id'];

$sql="DELETE FROM users where id=:id";
$getUsers->prepare($sql);
$getUsers->bindParam(":id",$id);
$getUsers->execute();

header("Location:dashboard.php");



?>