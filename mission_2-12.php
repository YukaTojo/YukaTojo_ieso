<?php

$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);



$sql='SELECT*FROM tojo';

$result=$pdo->query($sql);

foreach($result as $row){

echo $row['ID'].',';
echo $row['Age'].',';
echo $row['Height'].'<br>';

}

?>