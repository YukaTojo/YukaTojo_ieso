<html>

<body>

<?php
$filename="kadai1-6.txt";

$fp=fopen($filename,"a+");

fputs($fp,$_POST["message"]);

fclose($fp);

?>

</body>

</html>