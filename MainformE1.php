<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]!=4){
store_ans($_POST['ansC1'],"ansC1");
store_time($_COOKIE['start_timeC1'],"take_timeC1");
}

set_startTime("start_timeE1");

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

<?php if ($_COOKIE["counter"] != 9): ?>
<form method="post" action="MainformF1.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class = "Ptext">
      <?php
        echo file_get_contents("Qprograms2/E1.txt");
       ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansE1" value="1" required> 8 <br>
  <input type="radio" name="ansE1" value="2"> 10 <br>
  <input type="radio" name="ansE1" value="3"> 11 <br>
  <input type="radio" name="ansE1" value="4"> 15 <br>
  <input type="radio" name="ansE1" value="5"> 21 <br>
  <div class="buttom">
    <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformF2.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class = "Ptext">
        <?php
          echo file_get_contents("Qprograms2/E1.txt");
         ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansE1" value="1" required> 8 <br>
    <input type="radio" name="ansE1" value="2"> 10 <br>
    <input type="radio" name="ansE1" value="3"> 11 <br>
    <input type="radio" name="ansE1" value="4"> 15 <br>
    <input type="radio" name="ansE1" value="5"> 21 <br>
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
