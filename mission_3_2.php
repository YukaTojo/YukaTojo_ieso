<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>新規登録</title>
</head>

<body>

<?php

//入力されていないものがないか確かめる

if($_POST['username']=='' or $_POST['pass']=='' or $_POST['pass2']=='' or $_POST['mail']==''){
	session_start();
	$_SESSION['kariname']=$_POST['username'];
	session_start();
	$_SESSION['karimail']=$_POST['mail'];

	exit("入力されていない項目があります"."<br />"."<a href="."mission_3_1.php".">"."戻る"."</a>");
}


//パスワードが確認と異なっていないか確認

if($_POST['pass']!==$_POST['pass2']){
	session_start();
	$_SESSION['kariname']=$_POST['username'];
	session_start();
	$_SESSION['karimail']=$_POST['mail'];

	exit ("パスワードが確認と異なっています。もう一度確認してください。"."<br />"."<a href="."mission_3_1.php".">"."戻る"."</a>");
}



$userid=uniqid();
$username=$_POST['username'];
$pass=$_POST['pass'];
$mail=$_POST['mail'];
$date=date('Y-m-d H:i:s');
$flag=0;



$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);

mysql_set_charset('utf8');

$sql='SELECT*FROM user';

$result=$pdo->query($sql);

foreach($result as $row){

	if($row['mail']==$mail){
		exit ("同じメールアドレスが既に使われています。違うメールアドレスで登録してください。"."<br />"."<a href="."mission_3_1.php".">"."戻る"."</a>");
	}
}

//メール送信　ユニークID　送れなかったらexit?

$kenmei="雑談掲示板　本登録手続きのおしらせ";
$url="\n\n"."http://co-969.it.99sv-coco.com/mission_3_3.php?userid=".$userid;
$honbun="この度は、「俳句投稿サイト」への新規登録をしていただき、ありがとうございます。\n現在は仮登録となっており、まだ本登録の手続きは完了しておりません。\n下記のURLにて、本登録が完了いたします。(24時間以内に手続きを完了してください。)".$url;

mb_language("Japanese");
mb_internal_encoding("UTF-8");

if(mb_send_mail($mail,$kenmei,$honbun)){
	echo "メールが送信されました。"."<br />"."メールを確認し、本登録の手続きを行ってください。"."<br />"."(現在は仮登録となっています。)";
}else{
	exit ("メールが正しく送信されませんでした。"."<br />"."もう一度メールアドレスを確認してください。");
}


//userにデータを登録 フラグは0

$sql="INSERT INTO user(userid,username,password,mail,date,flag) VALUES('$userid','$username','$pass','$mail','$date','$flag')";

$result=$pdo->query($sql);



?>


</body>

</html>