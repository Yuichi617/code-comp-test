<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]==3){
store_ans($_POST['ansB1d'],"ansB1d");
store_time($_COOKIE['start_timeB1d'],"take_timeB1d");
}else{
store_ans($_POST['ansB00'],"ansB00");
store_time($_COOKIE['start_timeB00'],"take_timeB00");
}

set_startTime("start_timeC00");

setcookie("counter",$_COOKIE["counter"]+1,time()+60*60*24*30);
?>

<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/KCstylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">

<?php if ($_COOKIE["start"] == 4): ?>
<form method="post" action="LastMainform.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class = "Ptext">
      <?php
        echo file_get_contents("Qprograms2/C00.txt");
       ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansC00" value="1" required> true <br>
  <input type="radio" name="ansC00" value="2"> false <br>
  <div class="buttom">
    <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformE00.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class = "Ptext">
        <?php
          echo file_get_contents("Qprograms2/C00.txt");
         ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansC00" value="1" required> true <br>
    <input type="radio" name="ansC00" value="2"> false <br>
    <div class="buttom">
      <input type="submit" style="width:50px;height:50px" value="回答">
    </div>
  </div>

  </form>

<?php endif; ?>
</div>
<div class="footer">
</div>
</div>
</body>
</html>
