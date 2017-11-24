<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>簡易掲示板</title>
</head>

<body>

<h2>簡易掲示板2-15</h2>

<form method="post" action="mission_2-15-2.php">

<p>
名前：<input type="text" name="name"/><br /><br />
コメント<br />
<textarea name="comment" rows="5" cols="40">
</textarea>
<br />
<br />
パスワード(半角数字四桁)：
<input type="text" name="pass"/>
<br />
<input type="submit" value="送信"/>
<input type="reset" value="リセット"/>
</p>

</form>

<br />
<br />

<form method="post" action="mission_2-15-3.php">

<p>
削除する番号：<input type="text" name="number"/><br />
パスワード：<input type="password" name="pass"/><br />
<input type="submit" value="削除"/>
</p>

</form>

<form method="post" action="mission_2-15-4.php">

<p>
編集番号：<input type="text" name="number"/><br />
編集内容：<br />
<textarea name="comment_hensyuu" rows="5" cols="40">
</textarea>
<br />
パスワード：<input type="password" name="pass"/><br />
<input type="submit" value="編集"/>
<input type="reset" value="リセット"/>
</p>

</form>



<?php
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);

mysql_set_charset('utf8');

$sql='SELECT*FROM message';

$result=$pdo->query($sql);

foreach($result as $row){

echo 'No.'.$row['number'].' ';
echo '名前：'.$row['name'].' ';
echo $row['time'].'<br>';
echo 'コメント:'.'<br>';
echo $row['comment'].'<br>';
echo '<br>';

}

?>

</body>

</html>