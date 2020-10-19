<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/ansI0.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">
<form method="post" action="ansJ0.php">

<p>Q8の解説</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
        echo file_get_contents("Qprograms2/I0_1.txt");
     ?>
    </div>
</div>

<div class="ans">
    正解 : 2
</div>

<div class="Commentary">
<p>
  ＜解説＞<br>
  *V2 = V1 + 1 では、ポインタV2に配列V1の先頭要素のアドレスの次のアドレスを代入しています。<br>
  ポインタV2が指すアドレスは配列V1の先頭要素 4 の次の要素 2 のアドレスであるため、正解は2です。
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
