<html>

<head>
<meta http-equiv="Content-Type" content="text/html; default_charset=utf-8" />
<title>新規登録</title>
</head>

<body>

<h1>俳句投稿サイト</h1>
<h2>新規登録</h2>

<form method="post" action="mission_3_2.php">

<p>
ニックネーム：<input type="text" name="username" value=<?php session_start();if(isset($_SESSION['kariname'])){echo $_SESSION['kariname'];}else{echo "";}?>>
<br />
<br />
パスワード(半角10桁まで)：<input type="password" name="pass"/>
<br />
パスワード確認：<input type="password" name="pass2"/>
<br />
<br />
メールアドレス：<input type="text" name="mail" size="40" value=<?php session_start();if(isset($_SESSION['karimail'])){echo $_SESSION['karimail'];}else{echo "";}?>>
<br />
<input type="submit" value="仮登録"/>
</p>

</form>

（メールアドレスに本登録確認のURLを送信します）


</body>

</html>