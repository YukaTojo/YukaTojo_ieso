<?php
$filename="number.txt";

$fp=fopen($filename,"w");

fputs($fp,0);

fclose($fp);

?>