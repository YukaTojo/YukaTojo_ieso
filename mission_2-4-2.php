<html>

<head>

<title>���M�m�F</title>

</head>


<body>
<br />
���M���܂����B


<?php

if(strstr($_POST["name"]) && strstr($_POST["comment"]) && empty($_POST["number"]){

$filename="number3.txt";

$fp=fopen($filename,"r");

$number=fgets($fp);

fclose($fp);


$fp=fopen($filename,"w");
fclose($fp);


$number=$number + 1;

$fp=fopen($filename,"w");

fputs($fp,$number);

fclose($fp);


$filename="kadai2-4.txt";

$fp=fopen($filename,"a");

fputs($fp,$number."<>");
fputs($fp,$_POST["name"]."<>");
fputs($fp,$_POST["comment"]."<>");
fputs($fp,date("Y,m,d,G:i:s")."\n");

fclose($fp);



}elseif(empty($_POST["name"]) && empty($_POST["comment"]) && strstr($_POST["number"])){

//�t�@�C�����J���āA�����Ă��������ƃC�R�[���łȂ��Ƃ��A�㏑��
print("�폜�t�H�[���ő��M���ꂽ���Ƃ��m�F");


}else{

print("\n"."�������݂�����������܂���");

}




?>


</body>

</html>