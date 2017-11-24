<html>

<head>
<title>削除・編集フォーム</title>
</head>

<body>

<form method="post" action="mission_2-6-4.php">

<p>
削除する番号：<input type="text" name="number"/><br />
パスワード：<input type="password" name="pass"/><br />
<input type="submit" value="削除"/>
</p>

</form>

<form method="post" action="mission_2-6-5.php">

<p>
編集番号：<input type="text" name="number"/><br />
編集内容：<br />
<textarea name="comment_hensyuu" rows="5" cols="40">
</textarea>
<br />
パスワード：<input type="password" name="pass"/><br />
<input type="submit" value="編集"/>
<input type="reset" value="リセット"/>
</p>

</form>


<?php

$filename="kadai2-6.txt";

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