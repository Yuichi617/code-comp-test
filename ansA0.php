<?php
header('Content-Type: text/html; charset=UTF-8');
//require "StoreData.php";
//store_ans($_POST['ansJ0'],"ansJ0");
//store_time($_COOKIE['start_timeJ0'],"take_timeJ0");
?>
<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/ansA0.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">
<form method="post" action="ansB0.php">

<p>Q1の解説</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
        echo file_get_contents("Qprograms2/A0_1.txt");
     ?>
    </div>
</div>

<div class="ans">
    正解 : 2
</div>

<div class="Commentary">
<p>
  ＜解説＞<br>
  インクリメント演算子の後置きではインクリメント演算子による演算以外の処理を先に行うため、V2に2が代入されてからV1がインクリメントされ、実行結果は2となります。<br><br>
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
