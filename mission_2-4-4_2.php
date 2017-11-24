<html>

<head>
<title>íœŠ®—¹</title>
</head>

<body>

<br />
íœ‚µ‚Ü‚µ‚½

<?php

$filename="kadai2-4_2.txt";

$syutoku=file($filename);

for($a=0;$a<count($syutoku);$a++){

	$toukou=explode("<>",$syutoku[$a]);

if($toukou[0]==$_POST["number"]){



}elseif($toukou[0]!==$_POST["number"]){

	$filename="mission_2-4_kakikomi.txt";
	$fp=fopen($filename,"a");

	fputs($fp,$toukou[0]."<>");
	fputs($fp,$toukou[1]."<>");
	fputs($fp,$toukou[2]."<>");
	fputs($fp,$toukou[3]);

	fclose($fp);
}

}



unlink("kadai2-4_2.txt");

rename("mission_2-4_kakikomi.txt","kadai2-4_2.txt");


?>


</body>

</html>
