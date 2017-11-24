<?php

$filename='kadai1-2.txt';

$fp=fopen($filename,'r');

while($line=fgets($fp))

echo $line;

fclose($fp);

?>