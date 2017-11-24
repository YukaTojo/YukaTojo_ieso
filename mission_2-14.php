<?php

$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);

$id=0001;

$sql="delete from tojo where ID=$id";

$result=$pdo->query($sql);

?>