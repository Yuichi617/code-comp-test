<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/ansE0.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">
<form method="post" action="ansF0.php">

<p>Q4の解説</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
        echo file_get_contents("Qprograms2/E0_1.txt");
     ?>
    </div>
</div>

<div class="ans">
    正解 : 7
</div>

<div class="Commentary">
<p>
  ＜解説＞<br>
  M1(1+2, 3) は 1+3*2 として計算されるため、算術演算子の優先順位より3*2が先に計算され正解は7となります。
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
