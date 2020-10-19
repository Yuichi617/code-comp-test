<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]==7){
store_ans($_POST['ansG2d'],"ansG2d");
store_time($_COOKIE['start_timeG2d'],"take_timeG2d");
}else{
store_ans($_POST['ansG00'],"ansG00");
store_time($_COOKIE['start_timeG00'],"take_timeG00");
}

set_startTime("start_timeH00");

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

<?php if ($_COOKIE["start"] == 8): ?>
<form method="post" action="LastMainform.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class = "Ptext">
      <?php
        echo file_get_contents("Qprograms2/H00.txt");
       ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansH00" value="1" required> 1 <br>
  <input type="radio" name="ansH00" value="2"> 2 <br>
  <input type="radio" name="ansH00" value="3"> 3 <br>
  <input type="radio" name="ansH00" value="4"> 4 <br>
  <input type="radio" name="ansH00" value="5"> 5 <br>
  <div class="buttom">
    <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformI00.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class = "Ptext">
        <?php
          echo file_get_contents("Qprograms2/H00.txt");
         ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansH00" value="1" required> 1 <br>
    <input type="radio" name="ansH00" value="2"> 2 <br>
    <input type="radio" name="ansH00" value="3"> 3 <br>
    <input type="radio" name="ansH00" value="4"> 4 <br>
    <input type="radio" name="ansH00" value="5"> 5 <br>
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
