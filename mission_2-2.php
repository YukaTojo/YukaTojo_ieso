<html>

<head>

<title>���M�m�F</title>

</head>


<body>

���M���܂����B


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