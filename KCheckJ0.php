<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";
store_ans($_POST['ansI0'],"ansI0");
store_time($_COOKIE['start_timeI0'],"take_timeI0");
set_startTime("start_timeJ0");
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

  <form method="post" action="judge.php">

  <p>Q9:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

  <div class="program">
      プログラム
      <div class="Ptext">
      <?php
        echo file_get_contents("Qprograms2/J0_1.txt");
       ?>
  <!--     <img src="Qprograms2/A0.png" width="350" height="200"> -->
      </div>
  </div>

  <br><br>
  <div class="check-form">
    <input type="radio" name="ansJ0" value="1" required> 0, 1 <br>
    <input type="radio" name="ansJ0" value="2"> 1, 1  <br>
    <input type="radio" name="ansJ0" value="3"> 1, 2  <br>
    <input type="radio" name="ansJ0" value="4"> 2, 1  <br>
    <input type="radio" name="ansJ0" value="5"> 2, 2  <br>
    <div class="buttom">
        <input type="submit" style="width:50px;height:50px" value="回答">
    </div>
  </div>

  </form>

  <?php elseif ($key == 2): ?>

    <form method="post" action="judge.php">

    <p>Q9:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

    <div class="program">
        プログラム
        <div class="Ptext">
        <?php
          echo file_get_contents("Qprograms2/J0_2.txt");
         ?>
    <!--     <img src="Qprograms2/A0.png" width="350" height="200"> -->
        </div>
    </div>

    <br><br>
    <div class="check-form">
      <input type="radio" name="ansJ0" value="1" required> 0, 2 <br>
      <input type="radio" name="ansJ0" value="2"> 2, 2  <br>
      <input type="radio" name="ansJ0" value="3"> 2, 3 <br>
      <input type="radio" name="ansJ0" value="4"> 3, 2  <br>
      <input type="radio" name="ansJ0" value="5"> 3, 3  <br>
      <div class="buttom">
          <input type="submit" style="width:50px;height:50px" value="回答">
      </div>
    </div>

    </form>

  <?php elseif ($key == 3): ?>

    <form method="post" action="judge.php">

    <p>Q9:以下のプログラムを実行した際に標準出力に表示されるものを以下の選択肢より選んでください。</p>

    <div class="program">
        プログラム
        <div class="Ptext">
        <?php
          echo file_get_contents("Qprograms2/J0_3.txt");
         ?>
    <!--     <img src="Qprograms2/A0.png" width="350" height="200"> -->
        </div>
    </div>

    <br><br>
    <div class="check-form">
      <input type="radio" name="ansJ0" value="1" required> 3, 3 <br>
      <input type="radio" name="ansJ0" value="2"> 3, 1  <br>
      <input type="radio" name="ansJ0" value="3"> 0, 3  <br>
      <input type="radio" name="ansJ0" value="4"> 1, 3  <br>
      <input type="radio" name="ansJ0" value="5"> 1, 1  <br>
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
