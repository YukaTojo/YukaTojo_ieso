<?php

$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';

$pdo=new PDO($dsn,$user,$password);



$sql="INSERT INTO tojo VALUES(0001,020,155)";

$result=$pdo->query($sql);

?>