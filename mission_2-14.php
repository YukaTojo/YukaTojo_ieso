<?php

$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';

$pdo=new PDO($dsn,$user,$password);

$id=0001;

$sql="delete from tojo where ID=$id";

$result=$pdo->query($sql);

?>