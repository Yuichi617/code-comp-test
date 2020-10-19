<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]==8){
store_ans($_POST['ansH1'],"ansH1");
store_time($_COOKIE['start_timeH1'],"take_timeH1");
}else{
store_ans($_POST['ansH2'],"ansH2");
store_time($_COOKIE['start_timeH2'],"take_timeH2");
}

set_startTime("start_timeI2");

setcookie("counter",$_COOKIE["counter"]+1,time()+60*60*24*30);
//echo $_COOKIE["counter"];
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

<?php if ($_COOKIE["start"] == 9): ?>
<form method="post" action="MainformJ3.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class = "Ptext">
      <?php
        echo file_get_contents("Qprograms2/I2.txt");
       ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansI2" value="1" required> 2 <br>
  <input type="radio" name="ansI2" value="2"> 4 <br>
  <input type="radio" name="ansI2" value="3"> 5 <br>
  <input type="radio" name="ansI2" value="4"> 6 <br>
  <input type="radio" name="ansI2" value="5"> 7 <br>
  <div class="buttom">
    <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformJ2.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class = "Ptext">
        <?php
          echo file_get_contents("Qprograms2/I2.txt");
         ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansI2" value="1" required> 2 <br>
    <input type="radio" name="ansI2" value="2"> 4 <br>
    <input type="radio" name="ansI2" value="3"> 5 <br>
    <input type="radio" name="ansI2" value="4"> 6 <br>
    <input type="radio" name="ansI2" value="5"> 7 <br>
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
