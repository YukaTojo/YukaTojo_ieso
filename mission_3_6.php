<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>みんなの作品</title>
</head>

<body>

<?php

//cookieから取得

$mail=$_COOKIE['mail'];
$pass=$_COOKIE['pass'];


if(isset($mail) and isset($pass)){

	$dsn='データベース名';
	$user='ユーザー名';
	$password='パスワード';

	$pdo=new PDO($dsn,$user,$password);

	mysql_set_charset('utf8');

	$sql='SELECT*FROM user';

	$result=$pdo->query($sql);

	foreach($result as $row){
		if($row['mail']==$mail){
			if($row['password']==$pass){

$username=$row['username'];
echo"<h1>"."マイページ"."</h1>";
echo"<h4>".$username."さんのページ"."</h4>";

exit();

			}
		}
	}

}else{
header('location:mission_3_4.php');
	exit();
}