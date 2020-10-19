<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]==9){
store_ans($_POST['ansI2'],"ansI2");
store_time($_COOKIE['start_timeI2'],"take_timeI2");
}else{
store_ans($_POST['ansI3'],"ansI3");
store_time($_COOKIE['start_timeI3'],"take_timeI3");
}

set_startTime("start_timeJ3");

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

<?php if ($_COOKIE["start"] == 1): ?>
<form method="post" action="MainformA1'.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class = "Ptext">
      <?php
        echo file_get_contents("Qprograms2/J3.txt");
       ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansJ3" value="1" required> 4, 4 <br>
  <input type="radio" name="ansJ3" value="2"> 4, 6 <br>
  <input type="radio" name="ansJ3" value="3"> 4, 8 <br>
  <input type="radio" name="ansJ3" value="4"> 8, 4 <br>
  <input type="radio" name="ansJ3" value="5"> 8, 8 <br>
  <div class="buttom">
    <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformA3.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class = "Ptext">
        <?php
          echo file_get_contents("Qprograms2/J3.txt");
         ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansJ3" value="1" required> 4, 4 <br>
    <input type="radio" name="ansJ3" value="2"> 4, 6 <br>
    <input type="radio" name="ansJ3" value="3"> 4, 8 <br>
    <input type="radio" name="ansJ3" value="4"> 8, 4 <br>
    <input type="radio" name="ansJ3" value="5"> 8, 8 <br>
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
