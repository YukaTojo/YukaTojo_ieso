<?php


$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';

$pdo=new PDO($dsn,$user,$password);

$sql = 'CREATE TABLE tojo
	(
	ID INT(4),
	Age INT(3),
	Height INT(3)

	)';

$result=$pdo->query($sql);

?>
