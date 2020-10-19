<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]==3){
store_ans($_POST['ansB1'],"ansB1");
store_time($_COOKIE['start_timeB1'],"take_timeB1");
}else{
store_ans($_POST['ansB2'],"ansB2");
store_time($_COOKIE['start_timeB2'],"take_timeB2");
}

set_startTime("start_timeC2");

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

<?php if ($_COOKIE["start"] == 4): ?>
<form method="post" action="MainformE3.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class = "Ptext">
      <?php
        echo file_get_contents("Qprograms2/C2.txt");
       ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansC2" value="1" required> 0, 9 <br>
  <input type="radio" name="ansC2" value="2"> 1, 8 <br>
  <input type="radio" name="ansC2" value="3" > 3, 9 <br>
  <input type="radio" name="ansC2" value="4"> 4, 8 <br>
  <input type="radio" name="ansC2" value="5" > 4, 9 <br>
  <div class="buttom">
    <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformE2.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class = "Ptext">
        <?php
          echo file_get_contents("Qprograms2/C2.txt");
         ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansC2" value="1" required> 0, 9 <br>
    <input type="radio" name="ansC2" value="2"> 1, 8 <br>
    <input type="radio" name="ansC2" value="3" > 3, 9 <br>
    <input type="radio" name="ansC2" value="4"> 4, 8 <br>
    <input type="radio" name="ansC2" value="5" > 4, 9 <br>
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
