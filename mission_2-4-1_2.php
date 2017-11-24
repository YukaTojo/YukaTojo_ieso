<html>

<head>
<title>簡易掲示板</title>
</head>

<body>

<h2>簡易掲示板</h2>

<form method="post" action="mission_2-4-2_2.php">

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

$filename="kadai2-4_2.txt";

$syutoku=file($filename);



for($a=0;$a<count($syutoku);$a++){

$toukou=explode("<>",$syutoku[$a]);

print("No.".$toukou[0]."<br />");
print("投稿者：".$toukou[1]."<br />");
print("コメント：".$toukou[2]."<br />");
print("投稿日時：".$toukou[3]."<br />"."<br />");

}

?>

</body>

</html>