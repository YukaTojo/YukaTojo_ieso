<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>削除確認</title>
</head>

<body>

<?php

if($_POST['number']=='' or $_POST['pass']==''){
	exit("入力されていない項目があります");
}


$number=$_POST['number'];
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
		$sql="delete from message where number=$number";

		$result=$pdo->query($sql);

		echo "削除しました";

	}else{
		exit("パスワードがあっていません");
	}

}

?>

</body>

</html>