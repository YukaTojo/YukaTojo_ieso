<?php
$filename="kadai1-6_2.txt";

$fp=fopen($filename,"a");

fwrite($fp,$_POST["message"]."\n");


fclose($fp);

?>
