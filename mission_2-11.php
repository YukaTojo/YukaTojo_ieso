<?php

$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);



$sql="INSERT INTO tojo VALUES(0001,020,155)";

$result=$pdo->query($sql);

?>