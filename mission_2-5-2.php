<html>

<head>

<title>���M�m�F</title>

</head>


<body>
<br />
���M���܂����B


<?php


$filename="number5.txt";

$fp=fopen($filename,"r");

$number=fgets($fp);

fclose($fp);


$fp=fopen($filename,"w");
fclose($fp);


$number=$number + 1;

$fp=fopen($filename,"w");

fputs($fp,$number);

fclose($fp);


$filename="kadai2-5.txt";

$fp=fopen($filename,"a");

fputs($fp,$number."<>");
fputs($fp,$_POST["name"]."<>");
fputs($fp,$_POST["comment"]."<>");
fputs($fp,date("Y,m,d,G:i:s")."\n");

fclose($fp);



?>


</body>

</html>