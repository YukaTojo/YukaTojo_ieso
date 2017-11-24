<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>送信確認</title>
</head>

<body>

<?php

if($_POST['name']=='' or $_POST['comment']=='' or $_POST['pass']==''){
	exit("入力されていない項目があります");
}


$name=$_REQUEST['name'];
$comment=$_REQUEST['comment'];
$time=date('Y-m-d H:i:s');
$pass=$_POST['pass'];

$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);

mysql_set_charset('utf8');

$sql="INSERT INTO message(name,comment,time,password) VALUES('$name','$comment','$time','$pass')";

$result=$pdo->query($sql);

if (!$result) {
 	echo "投稿に失敗しました";
}else{
	echo "投稿しました";
}

?>

</body>

</html>