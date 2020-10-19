<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/ansB0.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">
<form method="post" action="ansC0.php">

<p>Q2の解説</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
        echo file_get_contents("Qprograms2/B0_1.txt");
     ?>
    </div>
</div>

<div class="ans">
    正解 : true
</div>

<div class="Commentary">
<p>
  ＜解説＞<br>
  論理演算子 "&&" と "||" では "&&" の方が優先順位が高く、0 && 0 が先に評価され偽となり、次に 1 || (偽) が評価され 真となるため、正解はtrueとなります。
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
