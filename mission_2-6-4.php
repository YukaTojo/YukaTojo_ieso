<html>

<head>
<title>�폜�m�F</title>
</head>

<body>

<?php


$filename="kadai2-6.txt";

$syutoku=file($filename);


for($a=0;$a<count($syutoku);$a++){

	$toukou=explode("<>",$syutoku[$a]);

if($toukou[0]==$_POST["number"]){

	if($toukou[4]==$_POST["pass"]){

	echo"�폜���܂���";


	}else{


	$filename="mission_2-6_kakikomi.txt";
	$fp=fopen($filename,"a");

	fputs($fp,$toukou[0]."<>");
	fputs($fp,$toukou[1]."<>");
	fputs($fp,$toukou[2]."<>");
	fputs($fp,$toukou[3]."<>");
	fputs($fp,$toukou[4]."<>");
	fputs($fp,$toukou[5]);

	fclose($fp);

	echo"�p�X���[�h���Ԉ���Ă��܂�";


	}

}elseif($toukou[0]!==$_POST["number"]){

	$filename="mission_2-6_kakikomi.txt";
	$fp=fopen($filename,"a");

	fputs($fp,$toukou[0]."<>");
	fputs($fp,$toukou[1]."<>");
	fputs($fp,$toukou[2]."<>");
	fputs($fp,$toukou[3]."<>");
	fputs($fp,$toukou[4]."<>");
	fputs($fp,$toukou[5]);

	fclose($fp);

}

}



unlink("kadai2-6.txt");

rename("mission_2-6_kakikomi.txt","kadai2-6.txt");


?>


</body>

</html>
