<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/ansJ0.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">
<form method="post" action="connect2.php">

<p>Q9の解説</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
        echo file_get_contents("Qprograms2/J0_1.txt");
     ?>
    </div>
</div>

<div class="ans">
    正解 : 2, 1
</div>

<div class="Commentary">
<p>
  ＜解説＞<br>
  コンマ演算子は、左被演算子を評価しその値を捨て、その後右被演算子を評価します。<br>
  今回の問題ではV2 = 1でV2に1を代入した後、2をV1に代入します。

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
