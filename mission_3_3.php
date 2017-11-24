<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>本登録手続き</title>
</head>

<body>

<?php

//getでuseridを受け取って、mysqlのなかにあったら、フラグを1にする

$userid=$_GET['userid'];

$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);

mysql_set_charset('utf8');

$sql='SELECT*FROM user';

$result=$pdo->query($sql);

$flag=1;

foreach($result as $row){

	if($row['userid']==$userid){

		$now = mktime(); //現在時刻
		$hikaku = $row['date'] - $now; //比較
		$sa = $hikaku/60; //分に変換

			if($sa < 1440){

				$sql="update user set flag =$flag where userid ='$userid'";
				$result=$pdo->query($sql);

				setcookie('mail',$row["mail"],time()+60*60*24*7);
				setcookie('pass',$row["password"],time()+60*60*24*7);

				exit ($row['username']."様"."<br />"."本登録完了しました。登録ありがとうございます。"."<br /><br />"."<a href="."mission_3_5.php".">"."マイページ"."</a>");

			}else{
				exit ("仮登録から24時間経過しています。再度仮登録し直してください。"."<br />"."<a href="."mission_3_1.php".">"."登録画面へ"."</a>");
			}
	}
}


echo "本登録できませんでした。仮登録期間を過ぎている可能性があります。"."<br />"."もう一度仮登録し直してください。"."<br />"."<a href="."mission_3_1.php".">"."登録画面へ"."</a>";


?>

</body>

</html>