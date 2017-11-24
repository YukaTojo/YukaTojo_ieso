<html>

<head>

<title>送信確認</title>

</head>


<body>

送信しました。


<?php

$filename="kadai2-2.txt";

$count=count(file($filename));

$fp=fopen($filename,"a");

fputs($fp,$count."<>");
fputs($fp,$_POST["name"]."<>");
fputs($fp,$_POST["comment"]."<>");
fputs($fp,date("Y,m,d,G:i:s")."\n");

fclose($fp);

?>

</body>

</html>