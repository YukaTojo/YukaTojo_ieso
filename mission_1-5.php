<?php
$filename="kadai1-5.txt";

$fp=fopen($filename,"w");

fputs($fp,$_POST["message"]);

fclose($fp);

?>