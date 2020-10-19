<?php
header('Content-Type: text/html; charset=UTF-8');
require "StoreData.php";
store_ans($_POST['ansJ0'],"ansJ0");
store_time($_COOKIE['start_timeJ0'],"take_timeJ0");
require ('vendor/autoload.php');
putenv('GOOGLE_APPLICATION_CREDENTIALS=credentials.json');
use Google\Cloud\Datastore\DatastoreClient;

if($_COOKIE['ansA0'] == 2){
  $score++;
  $judgeA0 = "正解";
  $A0result = 1;
}else{
  $judgeA0 = "不正解";
  $A0result = 0;
}

if($_COOKIE['ansB0'] == 1){
  $score++;
  $judgeB0 = "正解";
  $B0result = 1;
}else{
  $judgeB0 = "不正解";
  $B0result = 0;
}

if($_COOKIE['ansC0'] == 1){
  $score++;
  $judgeC0 = "正解";
  $C0result = 1;
}else{
  $judgeC0 = "不正解";
  $C1result = 0;
}

if($_COOKIE['ansE0'] == 2){
  $score++;
  $judgeE0 = "正解";
  $E0result = 1;
}else{
  $judgeE0 = "不正解";
  $E0result = 0;
}

if($_COOKIE['ansF0'] == 1){
  $score++;
  $judgeF0 = "正解";
  $F0result = 1;
}else{
  $judgeF0 = "不正解";
  $F0result = 0;
}

if($_COOKIE['ansG0'] == 2){
  $score++;
  $judgeG0 = "正解";
  $G0result = 1;
}else{
  $judgeG0 = "不正解";
  $G0result = 0;
}

if($_COOKIE['ansH0'] == 3){
  $score++;
  $judgeH0 = "正解";
  $H0result = 1;
}else{
  $judgeH0 = "不正解";
  $H0result = 0;
}

if($_COOKIE['ansI0'] == 2){
  $score++;
  $judgeI0 = "正解";
  $I0result = 1;
}else{
  $judgeI0 = "不正解";
  $I0result = 0;
}

if($_POST['ansJ0'] == 4){
  $score++;
  $judgeJ0 = "正解";
  $J0result = 1;
}else{
  $judgeJ0 = "不正解";
  $J0result = 0;
}

?>

<!DOCTYPE html>

<html lanf="ja">

<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/judge.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class = "site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">
<?php if ($score < 5): ?>
  <div class = "text">
  お疲れ様でした。</br>
  Q1~Q9までのあなたの成績は以下の通りです。<br>
  5問以上正解の方のみ次へ進めます。<br>
  <div class = "result">
  <?php
  echo "Q1:" . $judgeA0 . "<br />";
  echo "Q2:" . $judgeB0 . "<br />";
  echo "Q3:" . $judgeC0 . "<br />";
  echo "Q4:" . $judgeE0 . "<br />";
  echo "Q5:" . $judgeF0 . "<br />";
  echo "Q6:" . $judgeG0 . "<br />";
  echo "Q7:" . $judgeH0 . "<br />";
  echo "Q8:" . $judgeI0 . "<br />";
  echo "Q9:" . $judgeJ0 . "<br />";
   ?>
 </div>
  </div>

  <?php
    date_default_timezone_set('Asia/Tokyo');
    $end_date = date("Y/m/d H:i:s");

    $now = time();
    $start = $_COOKIE["start_timeJ0"];
    $take_time = (int)($now - $start);

    $projectId = 'modelcheckform-241916';
    $datastore = new DatastoreClient(['projectId' => $projectId]);

    $bob = $datastore->entity('Data4');

    $bob['career1'] = $_COOKIE['career1'];
    $bob['career2'] = $_COOKIE['career2'];
    $bob['career3'] = $_COOKIE['career3'];
    $bob['career4'] = $_COOKIE['career4'];
    $bob['self1'] = $_COOKIE['self1'];
    $bob['self2'] = $_COOKIE['self2'];

    $bob['A0'] = $_COOKIE['ansA0'];
    $bob['A0time'] = $_COOKIE['take_timeA0'];
    $bob['B0'] = $_COOKIE['ansB0'];
    $bob['B0time'] = $_COOKIE['take_timeB0'];
    $bob['C0'] = $_COOKIE['ansC0'];
    $bob['C0time'] = $_COOKIE['take_timeC0'];
  //  $bob['D0'] = $_COOKIE['ansD0'];
  //  $bob['D0time'] = $_COOKIE['take_timeD0'];
    $bob['E0'] = $_COOKIE['ansE0'];
    $bob['E0time'] = $_COOKIE['take_timeE0'];
    $bob['F0'] = $_COOKIE['ansF0'];
    $bob['F0time'] = $_COOKIE['take_timeF0'];
    $bob['G0'] = $_COOKIE['ansG0'];
    $bob['G0time'] = $_COOKIE['take_timeG0'];
    $bob['H0'] = $_COOKIE['ansH0'];
    $bob['H0time'] = $_COOKIE['take_timeH0'];
    $bob['I0'] = $_COOKIE['ansI0'];
    $bob['I0time'] = $_COOKIE['take_timeI0'];
    $bob['J0'] = $_POST['ansJ0'];
    $bob['J0time'] = $take_time;

    $bob['A0result'] = $A0result;
    $bob['B0result'] = $B0result;
    $bob['C0result'] = $C0result;
  //  $bob['D0result'] = $D0result;
    $bob['E0result'] = $E0result;
    $bob['F0result'] = $F0result;
    $bob['G0result'] = $G0result;
    $bob['H0result'] = $H0result;
    $bob['I0result'] = $I0result;
    $bob['J0result'] = $J0result;

    /*タイムスタンプの取得*/
    $bob['start_date'] = $_COOKIE['start_date'];
    $bob['end_date'] = $end_date;
    /*ハッシュ値**/
    $bob['subjectid'] = $_COOKIE['subjectid'];

    $datastore->insert($bob);
   ?>

<?php else: ?>
<form method="post" action="ansA0.php">
  <div class = "text">
    Q1~Q9までのあなたの成績は以下の通りです。<br>
    <div class = "result">
    <?php
    echo "Q1:" . $judgeA0 . "<br />";
    echo "Q2:" . $judgeB0 . "<br />";
    echo "Q3:" . $judgeC0 . "<br />";
    echo "Q4:" . $judgeE0 . "<br />";
    echo "Q5:" . $judgeF0 . "<br />";
    echo "Q6:" . $judgeG0 . "<br />";
    echo "Q7:" . $judgeH0 . "<br />";
    echo "Q8:" . $judgeI0 . "<br />";
    echo "Q9:" . $judgeJ0 . "<br />";
     ?>
   </div>

  次にQ1~9の解説のページを表示します。<br>
  ＊解説のページの問題の定数値は解いていただいた問題と異なることがあります。
</div>
<div class="buttom">
<input type="submit" style="width:50px;height:50px" value="次へ">
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
