<?php
header('Content-Type: text/html; charset=UTF-8');
$start = rand(1,9);

/* ハッシュ値を生成しクッキーに保存 */
date_default_timezone_set('Asia/Tokyo');
$date = date("Y/m/d H:i:s");
$subjectid = rand(100000000,999999999);
setcookie("subjectid","$subjectid",time()+60*60*24*30);
setcookie("start_date","$date",time()+60*60*24*30);
setcookie("start","$start",time()+60*60*24*30);
setcookie("counter",1,time()+60*60*24*30);
//echo $start;
?>

<!DOCTYPE html>
<html lanf="ja">
<head>
    <meta charset="uft-8">
    <title>test_form</title>
    <link rel="stylesheet" href="css/Sstylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>

<body>
<div class="site-box">
<div class="header">
    <div class="header-logo"></div>
</div>

<div class="main">

<form method="post" action="KCheckA0.php">
プログラミング歴を入力してください: <input type="text" name="career1" required> 年
<br><br>
C言語を使った開発経験年数を入力してください: <input type="text" name="career2"  required> 年
<br><br>
商用開発での実務経験年数を入力してください: <input type="text" name="career3"  required> 年
<br><br>
コードレビューの経験年数を入力してください: <input type="text" name="career4"  required> 年
<br><br>
あなたのコードレビューの能力を6段階で自己評価してください。（1:低い 〜 6:高い）
<div class="career_form">
<select name="self1" size="1">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
</select>
</div>

あなたのプログラミング能力を6段階で自己評価してください。（1:低い 〜 6:高い）
<div class="career_form">
<select name="self2" size="1">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
</select>
</div>

<div class="buttom">
<input type="submit" style="width:50px;height:50px" value="回答">
</div>

</form>

</div>
</div>
</body>
</html>
