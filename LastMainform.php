<?php
header('Content-Type: text/html; charset=UTF-8');
$now = time();
if($_COOKIE["start"]==2){
  $start = $_COOKIE["start_timeA00"];
}elseif($_COOKIE["start"]==3){
  $start = $_COOKIE["start_timeB00"];
}elseif($_COOKIE["start"]==4){
  $start = $_COOKIE["start_timeC00"];
}elseif($_COOKIE["start"]==5){
  $start = $_COOKIE["start_timeE00"];
}elseif($_COOKIE["start"]==6){
  $start = $_COOKIE["start_timeF00"];
}elseif($_COOKIE["start"]==7){
  $start = $_COOKIE["start_timeG00"];
}elseif($_COOKIE["start"]==8){
  $start = $_COOKIE["start_timeH00"];
}elseif($_COOKIE["start"]==9){
  $start = $_COOKIE["start_timeI00"];
}elseif($_COOKIE["start"]==1){
  $start = $_COOKIE["start_timeJ00"];
}
$take_time = (int)($now - $start);

//echo "OK1";

date_default_timezone_set('Asia/Tokyo');
$end_date = date("Y/m/d H:i:s");
$count = 0;
  /*TypeA*/
  if($_COOKIE['ansA0'] == 2){
    $A0result = 1;
    //$count++;
  }else{
    $A0result = 0;
  }
  if($_COOKIE['ansA1'] == 4){
    $A1result = 1;
    $count++;
  }else{
    $A1result = 0;
  }
  if($_COOKIE['ansA2'] == 4){
    $A2result = 1;
    $count++;
  }else{
    $A2result = 0;
  }
  if($_COOKIE['ansA3'] == 1){
    $A3result = 1;
    $count++;
  }else{
    $A3result = 0;
  }

  if($_COOKIE["start"] != 2){
    if($_COOKIE['ansA00'] == 4){
      $A00result = 1;
      $count++;
    }else{
      $A00result = 0;
    }
  }else{
    if($_POST['ansA00'] == 4){
      $A00result = 1;
      $count++;
    }else{
      $A00result = 0;
    }
  }


  if($_COOKIE['ansA1d'] == 4){
    $A1dresult = 1;
    $count++;
  }else{
    $A1dresult = 0;
  }
  /*TypeB*/
  if($_COOKIE['ansB0'] == 1){
    $B0result = 1;
    $count++;
  }else{
    $B0result = 0;
  }
  if($_COOKIE['ansB1'] == 1){
    $B1result = 1;
  //  $count++;
  }else{
    $B1result = 0;
  }
  if($_COOKIE['ansB2'] == 1){
    $B2result = 1;
    $count++;
  }else{
    $B2result = 0;
  }
  if($_COOKIE['ansB3'] == 1){
    $B3result = 1;
    $count++;
  }else{
    $B3result = 0;
  }

  if($_COOKIE["start"] != 3){
    if($_COOKIE['ansB00'] == 1){
      $B00result = 1;
      $count++;
    }else{
      $B00result = 0;
    }
  }else{
    if($_POST['ansB00'] == 1){
      $B00result = 1;
      $count++;
    }else{
      $B00result = 0;
    }
  }

  if($_COOKIE['ansB1d'] == 1){
    $B1dresult = 1;
    $count++;
  }else{
    $B1dresult = 0;
  }
  /*TypeC*/
  if($_COOKIE['ansC0'] == 1){
    $C0result = 1;
  //  $count++;
  }else{
    $C0result = 0;
  }
  if($_COOKIE['ansC1'] == 2){
    $C1result = 1;
    $count++;
  }else{
    $C1result = 0;
  }
  if($_COOKIE['ansC2'] == 3){
    $C2result = 1;
    $count++;
  }else{
    $C2result = 0;
  }
  if($_COOKIE['ansC3'] == 5){
    $C3result = 1;
    $count++;
  }else{
    $C3result = 0;
  }

  if($_COOKIE["start"] != 4){
    if($_COOKIE['ansC00'] == 1){
      $C00result = 1;
      $count++;
    }else{
      $C00result = 0;
    }
  }else{
    if($_POST['ansC00'] == 1){
      $C00result = 1;
      $count++;
    }else{
      $C00result = 0;
    }
  }

  if($_COOKIE['ansC1d'] == 2){
    $C1dresult = 1;
    $count++;
  }else{
    $C1dresult = 0;
  }

  /*TypeD*/
//  if($_COOKIE['ansD0'] == 3){
//    $D0result = 1;
//    $count++;
//  }else{
//    $D0result = 0;
//  }
//  if($_COOKIE['ansD1'] == 4){
//    $D1result = 1;
//    $count++;
// }else{
//    $D1result = 0;
//  }
//  if($_COOKIE['ansD2'] == 2){
//    $D2result = 1;
//    $count++;
//  }else{
//    $D2result = 0;
//  }
//  if($_COOKIE['ansD3'] == 2){
//    $D3result = 1;
//    $count++;
//  }else{
//    $D3result = 0;
//  }

  /*TypeE*/
  if($_COOKIE['ansE0'] == 2){
    $E0result = 1;
  //  $count++;
  }else{
    $E0result = 0;
  }
  if($_COOKIE['ansE1'] == 3){
    $E1result = 1;
    $count++;
  }else{
    $E1result = 0;
  }
  if($_COOKIE['ansE2'] == 5){
    $E2result = 1;
    $count++;
  }else{
    $E2result = 0;
  }
  if($_COOKIE['ansE3'] == 4){
    $E3result = 1;
    $count++;
  }else{
    $E3result = 0;
  }

  if($_COOKIE["start"] != 5){
    if($_COOKIE['ansE00'] == 4){
      $E00result = 1;
      $count++;
    }else{
      $E00result = 0;
    }
  }else{
    if($_POST['ansE00'] == 4){
      $E00result = 1;
      $count++;
    }else{
      $E00result = 0;
    }
  }

  if($_COOKIE['ansE1d'] == 1){
    $E1dresult = 1;
    $count++;
  }else{
    $E1dresult = 0;
  }
  /*TypeF*/
  if($_COOKIE['ansF0'] == 1){
    $F0result = 1;
  //  $count++;
  }else{
    $F0result = 0;
  }
  if($_COOKIE['ansF1'] == 3){
    $F1result = 1;
    $count++;
  }else{
    $F1result = 0;
  }
  if($_COOKIE['ansF2'] == 2){
    $F2result = 1;
    $count++;
  }else{
    $F2result = 0;
  }
  if($_COOKIE['ansF3'] == 2){
    $F3result = 1;
    $count++;
  }else{
    $F3result = 0;
  }

  if($_COOKIE["start"] != 6){
    if($_COOKIE['ansF00'] == 1){
      $F00result = 1;
      $count++;
    }else{
      $F00result = 0;
    }
  }else{
    if($_POST['ansF00'] == 1){
      $F00result = 1;
      $count++;
    }else{
      $F00result = 0;
    }
  }

  if($_COOKIE['ansF1d'] == 3){
    $F1dresult = 1;
    $count++;
  }else{
    $F1dresult = 0;
  }
  /*TypeG*/
  if($_COOKIE['ansG0'] == 2){
    $G0result = 1;
//    $count++;
  }else{
    $G0result = 0;
  }
  if($_COOKIE['ansG1'] == 2){
    $G1result = 1;
    $count++;
  }else{
    $G1result = 0;
  }
  if($_COOKIE['ansG2'] == 2){
    $G2result = 1;
    $count++;
  }else{
    $G2result = 0;
  }
  if($_COOKIE['ansG3'] == 1){
    $G3result = 1;
    $count++;
  }else{
    $G3result = 0;
  }

  if($_COOKIE["start"] != 7){
    if($_COOKIE['ansG00'] == 2){
      $G00result = 1;
      $count++;
    }else{
      $G00result = 0;
    }
  }else{
    if($_POST['ansG00'] == 2){
      $G00result = 1;
      $count++;
    }else{
      $G00result = 0;
    }
  }

  if($_COOKIE['ansG2d'] == 2){
    $G2dresult = 1;
    $count++;
  }else{
    $G2dresult = 0;
  }
  /*TypeH*/
  if($_COOKIE['ansH0'] == 3){
    $H0result = 1;
//    $count++;
  }else{
    $H0result = 0;
  }
  if($_COOKIE['ansH1'] == 2){
    $H1result = 1;
    $count++;
  }else{
    $H1result = 0;
  }
  if($_COOKIE['ansH2'] == 4){
    $H2result = 1;
    $count++;
  }else{
    $H2result = 0;
  }
  if($_COOKIE['ansH3'] == 4){
    $H3result = 1;
    $count++;
  }else{
    $H3result = 0;
  }

  if($_COOKIE["start"] != 8){
    if($_COOKIE['ansH00'] == 2){
      $H00result = 1;
      $count++;
    }else{
      $H00result = 0;
    }
  }else{
    if($_POST['ansH00'] == 2){
      $H00result = 1;
      $count++;
    }else{
      $H00result = 0;
    }
  }

  if($_COOKIE['ansH1d'] == 3){
    $H1dresult = 1;
    $count++;
  }else{
    $H1dresult = 0;
  }
  /*TypeI*/
  if($_COOKIE['ansI0'] == 2){
    $I0result = 1;
//    $count++;
  }else{
    $I0result = 0;
  }
  if($_COOKIE['ansI1'] == 3){
    $I1result = 1;
    $count++;
  }else{
    $I1result = 0;
  }
  if($_COOKIE['ansI2'] == 4){
    $I2result = 1;
    $count++;
  }else{
    $I2result = 0;
  }
  if($_COOKIE['ansI3'] == 3){
    $I3result = 1;
    $count++;
  }else{
    $I3result = 0;
  }

  if($_COOKIE["start"] != 9){
    if($_COOKIE['ansI00'] == 5){
      $I00result = 1;
      $count++;
    }else{
      $I00result = 0;
    }
  }else{
    if($_POST['ansI00'] == 5){
      $I00result = 1;
      $count++;
    }else{
      $I00result = 0;
    }
  }

  if($_COOKIE['ansI1d'] == 4){
    $I1dresult = 1;
    $count++;
  }else{
    $I1dresult = 0;
  }
  /*TypeJ*/
  if($_COOKIE['ansJ0'] == 4){
    $J0result = 1;
//    $count++;
  }else{
    $J0result = 0;
  }
  if($_COOKIE['ansJ1'] == 5){
    $J1result = 1;
    $count++;
  }else{
    $J1result = 0;
  }
  if($_COOKIE['ansJ2'] == 3){
    $J2result = 1;
    $count++;
  }else{
    $J2result = 0;
  }
  if($_COOKIE['ansJ3'] == 1){
    $J3result = 1;
    $count++;
  }else{
    $J3result = 0;
  }

  if($_COOKIE["start"] != 1){
    if($_COOKIE['ansJ00'] == 3){
      $J00result = 1;
      $count++;
    }else{
      $J00result = 0;
    }
  }else{
    if($_POST['ansJ00'] == 3){
      $J00result = 1;
      $count++;
    }else{
      $J00result = 0;
    }
  }

  if($_COOKIE['ansJ0d'] == 3){
    $J0dresult = 1;
    $count++;
  }else{
    $J0dresult = 0;
  }
//  echo "OK2";
?>

<!DOCTYPE html>
<html lanf="ja">
<head>
    <meta charset="uft-8">
    <title>done</title>
    <link rel="stylesheet" href="css/Laststylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/cannotBack.js"></script>
</head>
<body>
<?php
  require ('vendor/autoload.php');
  use Google\Cloud\Datastore\DatastoreClient;
  use Google\Cloud\Storage\StorageClient;

  $projectId = 'code-comp-test';
  $datastore = new DatastoreClient(['projectId' => $projectId]);

  /*ストレージにデータファイルを作成*/
  //$storage = new StorageClient(['projectId' => $projectId]);
  //$bucket_name = 'modelcheckform-241916.appspot.com';
  //$bucket = $storage->bucket($projectId . $bucket_name);
  //$fp1 = fopen('newfile','w');
  //fwrite($fp1, "Samurai Engineer");
  //$object = $bucket->upload($fp1);
  //fclose($fp1);

  // Create an entity
  $bob = $datastore->entity('TestData');
  //$bob['ip'] = $_COOKIE['ip'];
  $bob['career1'] = $_COOKIE['career1'];
  $bob['career2'] = $_COOKIE['career2'];
  $bob['career3'] = $_COOKIE['career3'];
  $bob['career4'] = $_COOKIE['career4'];
  $bob['self1'] = $_COOKIE['self1'];
  $bob['self2'] = $_COOKIE['self2'];
  /*0番台の問題*/
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
  $bob['J0'] = $_COOKIE['ansJ0'];
  $bob['J0time'] = $_COOKIE['take_timeJ0'];
    /*1番台の問題*/
  $bob['A1'] = $_COOKIE['ansA1'];
  $bob['A1time'] = $_COOKIE['take_timeA1'];
  $bob['B1'] = $_COOKIE['ansB1'];
  $bob['B1time'] = $_COOKIE['take_timeB1'];
  $bob['C1'] = $_COOKIE['ansC1'];
  $bob['C1time'] = $_COOKIE['take_timeC1'];
//  $bob['D1'] = $_COOKIE['ansD1'];
//  $bob['D1time'] = $_COOKIE['take_timeD1'];
  $bob['E1'] = $_COOKIE['ansE1'];
  $bob['E1time'] = $_COOKIE['take_timeE1'];
  $bob['F1'] = $_COOKIE['ansF1'];
  $bob['F1time'] = $_COOKIE['take_timeF1'];
  $bob['G1'] = $_COOKIE['ansG1'];
  $bob['G1time'] = $_COOKIE['take_timeG1'];
  $bob['H1'] = $_COOKIE['ansH1'];
  $bob['H1time'] = $_COOKIE['take_timeH1'];
  $bob['I1'] = $_COOKIE['ansI1'];
  $bob['I1time'] = $_COOKIE['take_timeI1'];
  $bob['J1'] = $_COOKIE['ansJ1'];
  $bob['J1time'] = $_COOKIE['take_timeJ1'];
    /*2番台の問題*/
  $bob['A2'] = $_COOKIE['ansA2'];
  $bob['A2time'] = $_COOKIE['take_timeA2'];
  $bob['B2'] = $_COOKIE['ansB2'];
  $bob['B2time'] = $_COOKIE['take_timeB2'];
  $bob['C2'] = $_COOKIE['ansC2'];
  $bob['C2time'] = $_COOKIE['take_timeC2'];
//  $bob['D2'] = $_COOKIE['ansD2'];
//  $bob['D2time'] = $_COOKIE['take_timeD2'];
  $bob['E2'] = $_COOKIE['ansE2'];
  $bob['E2time'] = $_COOKIE['take_timeE2'];
  $bob['F2'] = $_COOKIE['ansF2'];
  $bob['F2time'] = $_COOKIE['take_timeF2'];
  $bob['G2'] = $_COOKIE['ansG2'];
  $bob['G2time'] = $_COOKIE['take_timeG2'];
  $bob['H2'] = $_COOKIE['ansH2'];
  $bob['H2time'] = $_COOKIE['take_timeH2'];
  $bob['I2'] = $_COOKIE['ansI2'];
  $bob['I2time'] = $_COOKIE['take_timeI2'];
  $bob['J2'] = $_COOKIE['ansJ2'];
  $bob['J2time'] = $_COOKIE['take_timeJ2'];
  /*3番台の問題*/
  $bob['A3'] = $_COOKIE['ansA3'];
  $bob['A3time'] = $_COOKIE['take_timeA3'];
  $bob['B3'] = $_COOKIE['ansB3'];
  $bob['B3time'] = $_COOKIE['take_timeB3'];
  $bob['C3'] = $_COOKIE['ansC3'];
  $bob['C3time'] = $_COOKIE['take_timeC3'];
//  $bob['D3'] = $_COOKIE['ansD3'];
//  $bob['D3time'] = $_COOKIE['take_timeD3'];
  $bob['E3'] = $_COOKIE['ansE3'];
  $bob['E3time'] = $_COOKIE['take_timeE3'];
  $bob['F3'] = $_COOKIE['ansF3'];
  $bob['F3time'] = $_COOKIE['take_timeF3'];
  $bob['G3'] = $_COOKIE['ansG3'];
  $bob['G3time'] = $_COOKIE['take_timeG3'];
  $bob['H3'] = $_COOKIE['ansH3'];
  $bob['H3time'] = $_COOKIE['take_timeH3'];
  $bob['I3'] = $_COOKIE['ansI3'];
  $bob['I3time'] = $_COOKIE['take_timeI3'];
  $bob['J3'] = $_COOKIE['ansJ3'];
  $bob['J3time'] = $_COOKIE['take_timeJ3'];
  /*'番台の問題*/
  $bob['A1d'] = $_COOKIE['ansA1d'];
  $bob['A1dtime'] = $_COOKIE['take_timeA1d'];
  $bob['B1d'] = $_COOKIE['ansB1d'];
  $bob['B1dtime'] = $_COOKIE['take_timeB1d'];
  $bob['C1d'] = $_COOKIE['ansC1d'];
  $bob['C1dtime'] = $_COOKIE['take_timeC1d'];
  //  $bob['D3'] = $_COOKIE['ansD3'];
  //  $bob['D3time'] = $_COOKIE['take_timeD3'];
  $bob['E1d'] = $_COOKIE['ansE1d'];
  $bob['E1dtime'] = $_COOKIE['take_timeE1d'];
  $bob['F1d'] = $_COOKIE['ansF1d'];
  $bob['F1dtime'] = $_COOKIE['take_timeF1d'];
  $bob['G2d'] = $_COOKIE['ansG2d'];
  $bob['G2dtime'] = $_COOKIE['take_timeG2d'];
  $bob['H1d'] = $_COOKIE['ansH1d'];
  $bob['H1dtime'] = $_COOKIE['take_timeH1d'];
  $bob['I1d'] = $_COOKIE['ansI1d'];
  $bob['I1dtime'] = $_COOKIE['take_timeI1d'];
  $bob['J0d'] = $_COOKIE['ansJ0d'];
  $bob['J0dtime'] = $_COOKIE['take_timeJ0d'];
  //echo "OK3";
  /*00番台の問題*/
  if($_COOKIE["start"] != 2){
    $bob['A00'] = $_COOKIE['ansA00'];
    $bob['A00time'] = $_COOKIE['take_timeA00'];
  }else{
    $bob['A00'] = $_POST['ansA00'];
    $bob['A00time'] = $take_time;
  }
  if($_COOKIE["start"] != 3){
    $bob['B00'] = $_COOKIE['ansB00'];
    $bob['B00time'] = $_COOKIE['take_timeB00'];
  }else{
    $bob['B00'] = $_POST['ansB00'];
    $bob['B00time'] = $take_time;
  }
  if($_COOKIE["start"] != 4){
    $bob['C00'] = $_COOKIE['ansC00'];
    $bob['C00time'] = $_COOKIE['take_timeC00'];
  }else{
    $bob['C00'] = $_POST['ansC00'];
    $bob['C00time'] = $take_time;
  }
  if($_COOKIE["start"] != 5){
    $bob['E00'] = $_COOKIE['ansE00'];
    $bob['E00time'] = $_COOKIE['take_timeE00'];
  }else{
    $bob['E00'] = $_POST['ansE00'];
    $bob['E00time'] = $take_time;
  }
  if($_COOKIE["start"] != 6){
    $bob['F00'] = $_COOKIE['ansF00'];
    $bob['F00time'] = $_COOKIE['take_timeF00'];
  }else{
    $bob['F00'] = $_POST['ansF00'];
    $bob['F00time'] = $take_time;
  }
  if($_COOKIE["start"] != 7){
    $bob['G00'] = $_COOKIE['ansG00'];
    $bob['G00time'] = $_COOKIE['take_timeG00'];
  }else{
    $bob['G00'] = $_POST['ansG00'];
    $bob['G00time'] = $take_time;
  }
  if($_COOKIE["start"] != 8){
    $bob['H00'] = $_COOKIE['ansH00'];
    $bob['H00time'] = $_COOKIE['take_timeH00'];
  }else{
    $bob['H00'] = $_POST['ansH00'];
    $bob['H00time'] = $take_time;
  }
  if($_COOKIE["start"] != 9){
    $bob['I00'] = $_COOKIE['ansI00'];
    $bob['I00time'] = $_COOKIE['take_timeI00'];
  }else{
    $bob['I00'] = $_POST['ansI00'];
    $bob['I00time'] = $take_time;
  }
  if($_COOKIE["start"] != 1){
    $bob['J00'] = $_COOKIE['ansJ00'];
    $bob['J00time'] = $_COOKIE['take_timeJ00'];
  }else{
    $bob['J00'] = $_POST['ansJ00'];
    $bob['J00time'] = $take_time;
  }
  //echo "OK4";
/*  $bob['B00'] = $_COOKIE['ansB00'];
  $bob['B00time'] = $_COOKIE['take_timeB00'];
  $bob['C00'] = $_COOKIE['ansC00'];
  $bob['C00time'] = $_COOKIE['take_timeC00'];
  $bob['E00'] = $_COOKIE['ansE00'];
  $bob['E00time'] = $_COOKIE['take_timeE00'];
  $bob['F00'] = $_COOKIE['ansF00'];
  $bob['F00time'] = $_COOKIE['take_timeF00'];
  $bob['G00'] = $_COOKIE['ansG00'];
  $bob['G00time'] = $_COOKIE['take_timeG00'];
  $bob['H00'] = $_COOKIE['ansH00'];
  $bob['H00time'] = $_COOKIE['take_timeH00'];
  $bob['I00'] = $_COOKIE['ansI00'];
  $bob['I00time'] = $_COOKIE['take_timeI00'];
  $bob['J00'] = $_POST['ansJ00'];
  $bob['J00time'] = $take_time; */

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

  $bob['A1result'] = $A1result;
  $bob['B1result'] = $B1result;
  $bob['C1result'] = $C1result;
//  $bob['D1result'] = $D1result;
  $bob['E1result'] = $E1result;
  $bob['F1result'] = $F1result;
  $bob['G1result'] = $G1result;
  $bob['H1result'] = $H1result;
  $bob['I1result'] = $I1result;
  $bob['J1result'] = $J1result;

  $bob['A2result'] = $A2result;
  $bob['B2result'] = $B2result;
  $bob['C2result'] = $C2result;
//  $bob['D2result'] = $D2result;
  $bob['E2result'] = $E2result;
  $bob['F2result'] = $F2result;
  $bob['G2result'] = $G2result;
  $bob['H2result'] = $H2result;
  $bob['I2result'] = $I2result;
  $bob['J2result'] = $J2result;

  $bob['A3result'] = $A3result;
  $bob['B3result'] = $B3result;
  $bob['C3result'] = $C3result;
//  $bob['D3result'] = $D3result;
  $bob['E3result'] = $E3result;
  $bob['F3result'] = $F3result;
  $bob['G3result'] = $G3result;
  $bob['H3result'] = $H3result;
  $bob['I3result'] = $I3result;
  $bob['J3result'] = $J3result;

  $bob['A1dresult'] = $A1dresult;
  $bob['B1dresult'] = $B1dresult;
  $bob['C1dresult'] = $C1dresult;
//  $bob['D3result'] = $D3result;
  $bob['E1dresult'] = $E1dresult;
  $bob['F1dresult'] = $F1dresult;
  $bob['G2dresult'] = $G2dresult;
  $bob['H1dresult'] = $H1dresult;
  $bob['I1dresult'] = $I1dresult;
  $bob['J0dresult'] = $J0dresult;

  $bob['A00result'] = $A00result;
  $bob['B00result'] = $B00result;
  $bob['C00result'] = $C00result;
//  $bob['D3result'] = $D3result;
  $bob['E00result'] = $E00result;
  $bob['F00result'] = $F00result;
  $bob['G00result'] = $G00result;
  $bob['H00result'] = $H00result;
  $bob['I00result'] = $I00result;
  $bob['J00result'] = $J00result;
  //echo "OK5";
  /*タイムスタンプの取得*/
  $bob['start_date'] = $_COOKIE['start_date'];
  $bob['end_date'] = $end_date;
  /*ハッシュ値**/
  $bob['subjectid'] = $_COOKIE['subjectid'];
  $bob['start'] = $_COOKIE['start'];

  $ID = $_COOKIE['subjectid'];
  $bob['ID'] = $ID;
  //echo "OK6";
  $datastore->insert($bob);
  //echo "OK7";
  echo "ご協力ありがとうございました。<br>";
  echo "あなたの正解数は45問中 $count 問です。<br>";
  echo "以下に表示されているIDをクラウドワークスのフォームに入力してください。"
  ?>

</body>
</html>
