<?php


$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);

$sql = 'CREATE TABLE message
	(
	number INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	comment TEXT,
	time DATETIME,
	password INT(4)

	)';

$result=$pdo->query($sql);

?>
