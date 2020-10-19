<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

if($_COOKIE["start"]==1){
store_ans($_POST['ansJ2'],"ansJ2");
store_time($_COOKIE['start_timeJ2'],"take_timeJ2");
}else{
store_ans($_POST['ansJ3'],"ansJ3");
store_time($_COOKIE['start_timeJ3'],"take_timeJ3");
}

set_startTime("start_timeA3");

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
<form method="post" action="MainformB1'.php">

<p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
        echo file_get_contents("Qprograms2/A3.txt");
     ?>
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansA3" value="1" required> 8 <br>
  <input type="radio" name="ansA3" value="2"> 9  <br>
  <input type="radio" name="ansA3" value="3"> 10  <br>
  <input type="radio" name="ansA3" value="4"> 11  <br>
  <input type="radio" name="ansA3" value="5"> 12  <br>
  <div class="buttom">
      <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php else: ?>
  <form method="post" action="MainformB3.php">

  <p>Q<?=$_COOKIE["counter"]?>:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class="Ptext">
      <?php
          echo file_get_contents("Qprograms2/A3.txt");
       ?>
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansA3" value="1" required> 8 <br>
    <input type="radio" name="ansA3" value="2"> 9  <br>
    <input type="radio" name="ansA3" value="3"> 10  <br>
    <input type="radio" name="ansA3" value="4"> 11  <br>
    <input type="radio" name="ansA3" value="5"> 12  <br>
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
</div>
</body>
</html>
