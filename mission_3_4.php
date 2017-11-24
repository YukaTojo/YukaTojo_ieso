<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>ログインフォーム</title>
</head>

<body>

<?php

//cookieでログインできる状態か確認

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
			header('location:mission_3_5.php');
			exit();
		}
	}
}
}

?>



<!--formでログイン--!>

<h1>俳句投稿サイト</h1>
<h2>ログインフォーム</h2>

<form method="post" action="mission_3_5.php">

<p>
メールアドレス：<input type="text" name="mail" size="40"/>
<br />
パスワード：<input type="password" name="pass"/>
<br />
<input type="submit" value="ログイン"/>
</p>

</form>


</body>

</html>