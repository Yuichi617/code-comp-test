<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/ansG0.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">
<form method="post" action="ansH0.php">

<p>Q6の解説</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
        echo file_get_contents("Qprograms2/G0_1.txt");
     ?>
    </div>
</div>

<div class="ans">
    正解 : false
</div>

<div class="Commentary">
<p>
  ＜解説＞<br>
  if()の()の中の数値が0であれば偽として扱われ、0以外であれば真として扱われます。<br>
  今回の問題では, V1とV2の和は0となるためif()の()の中の数値は0となり、else内のステートメント printf("false\n"); が実行されます。
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
