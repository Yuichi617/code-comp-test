<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";

store_prof($_POST['career1'],"career1");
store_prof($_POST['career2'],"career2");
store_prof($_POST['career3'],"career3");
store_prof($_POST['career4'],"career4");
store_prof($_POST['self1'],"self1");
store_prof($_POST['self2'],"self2");

set_startTime("start_timeA0");
$key = rand(1,3);

/* ハッシュ値を生成しクッキーに保存 */
//date_default_timezone_set('Asia/Tokyo');
//$date = date("Y/m/d H:i:s");
//$subjectid = rand(100000000,999999999);
//$hashed = hash('adler32', $time . $rand);
//setcookie("subjectid","$subjectid",time()+60*60*24*30);
//setcookie("start_date","$date",time()+60*60*24*30);
//echo $hashed . "\n";
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

<?php if ($key == 1): ?>

<form method="post" action="KCheckB0.php">

<p>Q1:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

<div class="program">
    プログラム
    <div class="Ptext">
    <?php
      echo file_get_contents("Qprograms2/A0_1.txt");
     ?>
<!--     <img src="Qprograms2/A0.png" width="350" height="200"> -->
    </div>
</div>

<br><br>
<div class="check-form">
  <input type="radio" name="ansA0" value="1" required> 1 <br>
  <input type="radio" name="ansA0" value="2"> 2  <br>
  <input type="radio" name="ansA0" value="3"> 3  <br>
  <input type="radio" name="ansA0" value="4"> 4  <br>
  <input type="radio" name="ansA0" value="5"> 5  <br>
  <div class="buttom">
      <input type="submit" style="width:50px;height:50px" value="回答">
  </div>
</div>

</form>

<?php elseif ($key == 2): ?>

  <form method="post" action="KCheckB0.php">

  <p>Q1:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class="Ptext">
      <?php
        echo file_get_contents("Qprograms2/A0_2.txt");
       ?>
  <!--     <img src="Qprograms2/A0.png" width="350" height="200"> -->
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansA0" value="1" required> 4 <br>
    <input type="radio" name="ansA0" value="2"> 5  <br>
    <input type="radio" name="ansA0" value="3"> 6  <br>
    <input type="radio" name="ansA0" value="4"> 7  <br>
    <input type="radio" name="ansA0" value="5"> 8  <br>
    <div class="buttom">
        <input type="submit" style="width:50px;height:50px" value="回答">
    </div>
  </div>

  </form>

<?php elseif ($key == 3): ?>

  <form method="post" action="KCheckB0.php">

  <p>Q1:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class="Ptext">
      <?php
        echo file_get_contents("Qprograms2/A0_3.txt");
       ?>
  <!--     <img src="Qprograms2/A0.png" width="350" height="200"> -->
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansA0" value="1" required> 6 <br>
    <input type="radio" name="ansA0" value="2"> 7  <br>
    <input type="radio" name="ansA0" value="3"> 8  <br>
    <input type="radio" name="ansA0" value="4"> 9  <br>
    <input type="radio" name="ansA0" value="5"> 10  <br>
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
