<html>
<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
</head>

<body>
<?php

$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';

$pdo=new PDO($dsn,$user,$password);

mysql_set_charset('utf8');

$sql='SELECT*FROM message';

$result=$pdo->query($sql);

foreach($result as $row){

echo $row['number'].',';
echo $row['name'].',';
echo $row['comment'].',';
echo $row['time'].',';
echo $row['password'].'<br>';

}

?>

</body>
</html>