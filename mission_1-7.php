<?php

$filename='kadai1-6_2.txt';

$ret_array=file($filename);

for($i=0;

$i<count($ret_array);++$i){


echo($ret_array[$i]."<br />\n");

}

?>