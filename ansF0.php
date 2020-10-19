<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/ansF0.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">
<form method="post" action="ansG0.php">

<p>Q5の解説</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
        echo file_get_contents("Qprograms2/F0_1.txt");
     ?>
    </div>
</div>

<div class="ans">
    正解 : 6, 6.6, 44
</div>

<div class="Commentary">
<p>
  ＜解説＞<br>
  異なる型同士の計算では、精度の高い型に合わせて計算します。<br>
  int型とfloat型の計算では、float型に合わせて計算されます。<br>
  int型をchar型に代入するとint型の下位8ビットがchar型に代入され、float型をint型に代入すると小数点以下が切り捨てられるため、正解は6, 6.6, 44 となります。
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
