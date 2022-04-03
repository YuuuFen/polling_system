<?php

include_once "db.php";

$id=$_POST['id'];
$addr=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$birthday=$_POST['birthday'];
$province=$_POST['province'];

//更新的sql語法;
$sql_users="UPDATE `users` SET `password`='password', ,`name`='$name', `mail`='$mail', `province`='province' WHERE `id`='$id'";


//執行更新;
$pdo->exec($sql_users);

header("location:../content.php?action=");

?>