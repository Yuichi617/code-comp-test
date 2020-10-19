<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/ansH0.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">
<form method="post" action="ansI0.php">

<p>Q7の解説</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
        echo file_get_contents("Qprograms2/H0_1.txt");
     ?>
    </div>
</div>

<div class="ans">
    正解 : 3
</div>

<div class="Commentary">
<p>
  ＜解説＞<br>
  中括弧が省略された制御文では、最初のセミコロンまでのステートメントが制御文内の処理となります。<br>
  したがって今回の問題では、V1++ のみがif文での処理となり正解は3となります。
</p>
</div>

<div class="buttom">
<input type="submit" style="width:50px;height:50px" value="次へ">
</div>

</form>
</div>
<div class="footer">
</div>
</div>
</div>
</body>
</html>
