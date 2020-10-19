<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";
store_ans($_POST['ansE0'],"ansE0");
store_time($_COOKIE['start_timeE0'],"take_timeE0");
set_startTime("start_timeF0");
$key = rand(1,3);
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

  <form method="post" action="KCheckG0.php">

  <p>Q5:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class="Ptext">
      <?php
        echo file_get_contents("Qprograms2/F0_1.txt");
       ?>
  <!--     <img src="Qprograms2/A0.png" width="350" height="200"> -->
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansF0" value="1" required> 6, 6.6, 44 <br>
    <input type="radio" name="ansF0" value="2"> 6, 6.6, 256  <br>
    <input type="radio" name="ansF0" value="3"> 7, 6.0, 256  <br>
    <input type="radio" name="ansF0" value="4"> 7, 6.6, 44  <br>
    <input type="radio" name="ansF0" value="5"> 7, 7.0, 256  <br>
    <div class="buttom">
        <input type="submit" style="width:50px;height:50px" value="回答">
    </div>
  </div>

  </form>

  <?php elseif ($key == 2): ?>

    <form method="post" action="KCheckG0.php">

    <p>Q5:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

    <div class="program">
        プログラム
        <div class="Ptext">
        <?php
          echo file_get_contents("Qprograms2/F0_2.txt");
         ?>
    <!--     <img src="Qprograms2/A0.png" width="350" height="200"> -->
        </div>
    </div>

    <br><br>
    <div class="check-form">
      <input type="radio" name="ansF0" value="1" required> 4, 4.5, 44 <br>
      <input type="radio" name="ansF0" value="2"> 4, 4.5, 256  <br>
      <input type="radio" name="ansF0" value="3"> 5, 4.0, 256  <br>
      <input type="radio" name="ansF0" value="4"> 5, 4.5, 44  <br>
      <input type="radio" name="ansF0" value="5"> 5, 5.0, 256  <br>
      <div class="buttom">
          <input type="submit" style="width:50px;height:50px" value="回答">
      </div>
    </div>

    </form>

  <?php elseif ($key == 3): ?>

    <form method="post" action="KCheckG0.php">

    <p>Q5:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

    <div class="program">
        プログラム
        <div class="Ptext">
        <?php
          echo file_get_contents("Qprograms2/F0_3.txt");
         ?>
    <!--     <img src="Qprograms2/A0.png" width="350" height="200"> -->
        </div>
    </div>

    <br><br>
    <div class="check-form">
      <input type="radio" name="ansF0" value="1" required> 9, 9.9, 44 <br>
      <input type="radio" name="ansF0" value="2"> 9, 9.9, 256  <br>
      <input type="radio" name="ansF0" value="3"> 10, 9.0, 256  <br>
      <input type="radio" name="ansF0" value="4"> 10, 9.9, 44  <br>
      <input type="radio" name="ansF0" value="5"> 10, 10.0, 256  <br>
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
