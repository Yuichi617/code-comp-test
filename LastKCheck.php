<?php
header('Content-Type: text/html; charset=UTF-8');
$now = time();
$start = $_COOKIE["start_time6"];
$take_time = (int)($now - $start);
?>

<!DOCTYPE html>
<html lanf="ja">
<head>
    <meta charset="uft-8">
    <title>done</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>
<body>
<?php
  require ('vendor/autoload.php');
  putenv('GOOGLE_APPLICATION_CREDENTIALS=credentials.json');
  use Google\Cloud\Datastore\DatastoreClient;

  $projectId = 'modelcheckform-241916';
  $datastore = new DatastoreClient(['projectId' => $projectId]);

  // Create an entity
  $bob = $datastore->entity('Data');
  $bob['name'] = $_COOKIE['name'];
  $bob['career'] = $_COOKIE['career'];
  $bob['A0'] = $_COOKIE['answer1'];
  $bob['B0'] = $_COOKIE['answer2'];
  $bob['C0'] = $_COOKIE['answer3'];
  $bob['D0'] = $_COOKIE['answer4'];
  $bob['E0'] = $_COOKIE['answer5'];
  $bob['F0'] = $_POST['answer6'];
  $datastore->insert($bob);
  //$pdo = new PDO ( 'mysql:dbname=Experiment1; host=localhost;port=3306; charset=utf8', 'php_testuser', 'yuuichi617' );
  /*データベースへ挿入*/
//  $st = $pdo->prepare("INSERT INTO CheckData VALUES(NULL,?,?,?,?,?,?,?,?)");
  //$st->execute(array(
  //$_COOKIE['name'],$_COOKIE['career'],
  //$_COOKIE['answer1'],
  //$_COOKIE['answer2'],
  //$_COOKIE['answer3'],
  //$_COOKIE['answer4'],
  //$_COOKIE['answer5'],
  //$_POST['answer6']));

  echo 'ご協力ありがとうございました。';

  ?>

</body>
</html>
