<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>編集確認</title>
</head>

<body>

<?php

if($_POST['number']=='' or $_POST['comment_hensyuu']=='' or $_POST['pass']==''){
	exit("入力されていない項目があります");
}


$number=$_POST['number'];
$comment=$_POST['comment_hensyuu'];
$pass=$_POST['pass'];


$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);

mysql_set_charset('utf8');

$sql="SELECT*FROM message where number=$number";

$result=$pdo->query($sql);



foreach($result as $row){

	if($row['password']==$pass){
		$sql="update message set comment='$comment' where number=$number";

		$result=$pdo->query($sql);

		echo "編集しました";

	}else{
		exit("パスワードがあっていません");
	}

}

?>

</body>

</html>