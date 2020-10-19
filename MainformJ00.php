<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]==9){
store_ans($_POST['ansI1d'],"ansI1d");
store_time($_COOKIE['start_timeI1d'],"take_timeI1d");
}else{
store_ans($_POST['ansI00'],"ansI00");
store_time($_COOKIE['start_timeI00'],"take_timeI00");
}

set_startTime("start_timeJ00");

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
<form method="post" action="LastMainform.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class = "Ptext">
      <?php
        echo file_get_contents("Qprograms2/J00.txt");
       ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansJ00" value="1" required> 0, 2 <br>
  <input type="radio" name="ansJ00" value="2"> 1, 1 <br>
  <input type="radio" name="ansJ00" value="3"> 1, 2 <br>
  <input type="radio" name="ansJ00" value="4"> 2, 1 <br>
  <input type="radio" name="ansJ00" value="5"> 2, 2 <br>
  <div class="buttom">
    <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformA00.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class = "Ptext">
        <?php
          echo file_get_contents("Qprograms2/J00.txt");
         ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansJ00" value="1" required> 0, 2 <br>
    <input type="radio" name="ansJ00" value="2"> 1, 1 <br>
    <input type="radio" name="ansJ00" value="3"> 1, 2 <br>
    <input type="radio" name="ansJ00" value="4"> 2, 1 <br>
    <input type="radio" name="ansJ00" value="5"> 2, 2 <br>
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
