<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]==5){
store_ans($_POST['ansE3'],"ansE3");
store_time($_COOKIE['start_timeE3'],"take_timeE3");
}else{
store_ans($_POST['ansE1d'],"ansE1d");
store_time($_COOKIE['start_timeE1d'],"take_timeE1d");
}

set_startTime("start_timeF1d");

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

<?php if ($_COOKIE["start"] == 6): ?>
<form method="post" action="MainformG00.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class = "Ptext">
      <?php
        echo file_get_contents("Qprograms2/F1'.txt");
       ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansF1d" value="1" required> 0 <br>
  <input type="radio" name="ansF1d" value="2"> 1 <br>
  <input type="radio" name="ansF1d" value="3"> 32 <br>
  <input type="radio" name="ansF1d" value="4"> 256 <br>
  <input type="radio" name="ansF1d" value="5"> 261 <br>
  <div class="buttom">
    <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformG2'.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class = "Ptext">
        <?php
          echo file_get_contents("Qprograms2/F1'.txt");
         ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansF1d" value="1" required> 0 <br>
    <input type="radio" name="ansF1d" value="2"> 1 <br>
    <input type="radio" name="ansF1d" value="3"> 32 <br>
    <input type="radio" name="ansF1d" value="4"> 256 <br>
    <input type="radio" name="ansF1d" value="5"> 261 <br>
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
