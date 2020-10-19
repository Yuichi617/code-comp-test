<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]==1){
store_ans($_POST['ansJ3'],"ansJ3");
store_time($_COOKIE['start_timeJ3'],"take_timeJ3");
}else{
store_ans($_POST['ansJ0d'],"ansJ0d");
store_time($_COOKIE['start_timeJ0d'],"take_timeJ0d");
}

set_startTime("start_timeA1d");

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

<?php if ($_COOKIE["start"] == 2): ?>
<form method="post" action="MainformB00.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class = "Ptext">
      <?php
        echo file_get_contents("Qprograms2/A1'.txt");
       ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansA1d" value="1" required> 2, 5 <br>
  <input type="radio" name="ansA1d" value="2"> 2, 6 <br>
  <input type="radio" name="ansA1d" value="3"> 3, 3 <br>
  <input type="radio" name="ansA1d" value="4"> 3, 5 <br>
  <input type="radio" name="ansA1d" value="5"> 3, 6 <br>
  <div class="buttom">
    <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformB1'.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class = "Ptext">
        <?php
          echo file_get_contents("Qprograms2/A1'.txt");
         ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansA1d" value="1" required> 2, 5 <br>
    <input type="radio" name="ansA1d" value="2"> 2, 6 <br>
    <input type="radio" name="ansA1d" value="3"> 3, 3 <br>
    <input type="radio" name="ansA1d" value="4"> 3, 5 <br>
    <input type="radio" name="ansA1d" value="5"> 3, 6 <br>
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
