<html>

<head>
<title>�폜�E�ҏW�t�H�[��</title>
</head>

<body>

<form method="post" action="mission_2-6-4.php">

<p>
�폜����ԍ��F<input type="text" name="number"/><br />
�p�X���[�h�F<input type="password" name="pass"/><br />
<input type="submit" value="�폜"/>
</p>

</form>

<form method="post" action="mission_2-6-5.php">

<p>
�ҏW�ԍ��F<input type="text" name="number"/><br />
�ҏW���e�F<br />
<textarea name="comment_hensyuu" rows="5" cols="40">
</textarea>
<br />
�p�X���[�h�F<input type="password" name="pass"/><br />
<input type="submit" value="�ҏW"/>
<input type="reset" value="���Z�b�g"/>
</p>

</form>


<?php

$filename="kadai2-6.txt";

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