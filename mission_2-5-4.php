<html>

<head>
<title>ï“èWäÆóπ</title>
</head>

<body>

<br />
ï“èWÇµÇ‹ÇµÇΩ

<?php

$filename="kadai2-5.txt";

$syutoku=file($filename);

for($a=0;$a<count($syutoku);$a++){

	$toukou=explode("<>",$syutoku[$a]);

if($toukou[0]==$_POST["number"]){

	$filename="mission_2-5_kakikomi.txt";
	$fp=fopen($filename,"a");

	fputs($fp,$toukou[0]."<>");
	fputs($fp,$toukou[1]."<>");
	fputs($fp,$_POST["comment_hensyuu"]."<>");
	fputs($fp,$toukou[3]);

	fclose($fp);


}elseif($toukou[0]!==$_POST["number"]){

	$filename="mission_2-5_kakikomi.txt";
	$fp=fopen($filename,"a");

	fputs($fp,$toukou[0]."<>");
	fputs($fp,$toukou[1]."<>");
	fputs($fp,$toukou[2]."<>");
	fputs($fp,$toukou[3]);

	fclose($fp);
}

}



unlink("kadai2-5.txt");

rename("mission_2-5_kakikomi.txt","kadai2-5.txt");


?>


</body>

</html>
