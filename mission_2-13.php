<?php

$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';

$pdo=new PDO($dsn,$user,$password);


$id=0001;
$age=21;
$height=156;


$sql="update tojo set Age =$age, Height =$height where ID =$id";

$result=$pdo->query($sql);

?>