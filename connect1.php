<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>

<html lanf="ja">
<head>
    <meta charset="uft-8">
    <title>firstPage</title>
    <link rel="stylesheet" href="css/KCstylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="cannotBack.js"></script>
</head>

<body>
<div class="site-box">
<div class="header">
</div>

<div class="main">

この実験では最初に意思決定方法を判断する課題を行い、次にプログラミング読解についての問題を解いていただきます。
意思決定方法を判断する課題はMillisecond Software社が提供している「Inquisit」というツールを用いて行います。
課題の結果はMillisecond Software社に送られますが、個人情報が送られることはありません。
課題を行うにあたって、「Inquisit」のインストールが必要になります。「Inquisit」は「Ctrl+Q」で強制終了できます。<br><br>
開始ボタンをクリックすると、意思決定方法のテストを行うサイトへ移動します。<br><br>
ページの指示に従ってテストを行ってください。<br><br>
<form method="get" action="https://mili2nd.co/dqrb">
<input type="hidden" name="subjectid" value="<?=$_COOKIE["subjectid"]?>">
<input type="submit" style="width:50px;height:50px" value="開始">
</form>

</div>
</div>
</body>
</html>
