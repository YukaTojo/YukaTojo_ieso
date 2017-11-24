<html>

<head>

<title>送信確認</title>

</head>


<body>
<br />
送信しました。


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

//ファイルを開いて、送られてきた数字とイコールでないとき、上書き
print("削除フォームで送信されたことを確認");


}else{

print("\n"."書き込みが正しくありません");

}




?>


</body>

</html>