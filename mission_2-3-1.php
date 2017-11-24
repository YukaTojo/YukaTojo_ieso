<html>

<head>
<title>簡易掲示板</title>
</head>

<body>

<h2>簡易掲示板</h2>

<form method="post" action="mission_2-3-2.php">

<p>
名前：<input type="text" name="name"/><br /><br />
コメント<br />
<textarea name="comment" rows="5" cols="40">
</textarea>
<br />
<input type="submit" value="送信"/>
<input type="reset" value="リセット"/>
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
print("投稿者：".$toukou[1]." ");
print("コメント：".$toukou[2]." ");
print("投稿日時：".$toukou[3]."<br />");

$a++;
}

?>

</body>

</html>