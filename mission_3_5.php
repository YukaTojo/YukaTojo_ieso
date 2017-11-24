<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>マイページ</title>
</head>

<body>

<?php

//cookieから取得

$mail=$_COOKIE['mail'];
$pass=$_COOKIE['pass'];

//ログイン画面からきたときの認証

if(isset($_POST['mail']) and isset($_POST['pass'])){
	$dsn='データベース名';
	$user='ユーザー名';
	$password='パスワード';

	$pdo=new PDO($dsn,$user,$password);

	mysql_set_charset('utf8');

	$sql='SELECT*FROM user';

	$result=$pdo->query($sql);

	foreach($result as $row){
		if($_POST['mail']==$row['mail']){
			if($_POST['pass']==$row['password']){
				if($row['flag']==1){
				
					$username=$row['username'];
					setcookie('mail',$_POST['mail'],time()+60*60*24*7);
					setcookie('pass',$_POST['pass'],time()+60*60*24*7);

					echo"<h1>"."マイページ"."</h1>";
					echo"<h4>".$username."さんのページ"."</h4>";

					echo "<a href=mission_3_6.php>みんなの作品</a>"."／";
					echo "<a href=mission_3-7>自分へのコメント</a>"."／";
					echo "<a href=mission_3_8.php>雑談掲示板</a>";

					//nullをいれて、接続を切る
					$result=null;
					$pdo=null;



					exit();


				}else{ echo "仮登録状態になっています。メールを確認して、本登録手続きを行ってください。"."<br />"."<a href="."mission_3_4.php".">"."ログインフォームへ"."</a>";
					
				}
			}else{ echo "パスワードが間違っています。"."<br />"."<a href="."mission_3_4.php".">"."ログインフォームへ"."</a>";

			}
		}
	}

//cookieでログインできる状態か確認

}elseif(isset($mail) and isset($pass)){

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
				echo "<a href=mission_3_6.php>みんなの作品</a>"."／";
				echo "<a href=mission_3-7>自分へのコメント</a>"."／";
				echo "<a href=mission_3_8.php>雑談掲示板</a>";

				//nullをいれて、接続を切る
				$result=null;
				$pdo=null;


				exit();

			}
		}
	}

}else{
	header('location:mission_3_4.php');
	exit();
}


echo "メールアドレスが間違っています。"."<br />"."<a href="."mission_3_4.php".">"."ログインフォームへ"."</a>";



//nullをいれて、接続を切る
$result=null;
$pdo=null;

?>



</body>

</html>