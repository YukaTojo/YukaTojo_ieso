<?php
$filename='kadai1-2.txt';

$fp=fopen($filename,'w');

fwrite($fp,'test');

fclose($fp);

?>