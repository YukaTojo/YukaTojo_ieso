<html>

<head>
<title>�ȈՌf����</title>
</head>

<body>

<h2>�ȈՌf����</h2>

<form method="post" action="mission_2-4-2_2.php">

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

$filename="kadai2-4_2.txt";

$syutoku=file($filename);



for($a=0;$a<count($syutoku);$a++){

$toukou=explode("<>",$syutoku[$a]);

print("No.".$toukou[0]."<br />");
print("���e�ҁF".$toukou[1]."<br />");
print("�R�����g�F".$toukou[2]."<br />");
print("���e�����F".$toukou[3]."<br />"."<br />");

}

?>

</body>

</html>