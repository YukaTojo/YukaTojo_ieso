<?php
$filename="number2.txt";

$fp=fopen($filename,"w");

fputs($fp,0);

fclose($fp);

?>