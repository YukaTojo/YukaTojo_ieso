<html>

<head>
<title>�ȈՌf����</title>
</head>

<body>

<h2>�ȈՌf����</h2>

<form method="post" action="mission_2-3-2.php">

<p>
���O�F<input type="text" name="name"/><br /><br />
�R�����g<br />
<textarea name="comment" rows="5" cols="40">
</textarea>
<br />
<input type="submit" value="���M"/>
<input type="reset" value="���Z�b�g"/>
</p>

</form>


<?php

$filename="kadai2-3.txt";

$syutoku=file($filename);



$toukou="number2.txt";

$fp=fopen($toukou,"r");

$number=fgets($fp);

fclose($fp);


$a=0;
$number--;


while($a<=$number){

$toukou=explode("<>",$syutoku[$a]);

print("No.".$toukou[0]." ");
print("���e�ҁF".$toukou[1]." ");
print("�R�����g�F".$toukou[2]." ");
print("���e�����F".$toukou[3]."<br />");

$a++;
}

?>

</body>

</html>