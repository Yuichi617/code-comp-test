<?php
//  function store_info1($CAREER){
//    setcookie("career1","$CAREER",time()+60*60*24*30);
//  }
//  function store_info2($CAREER){
//    setcookie("career2","$CAREER",time()+60*60*24*30);
//  }
//  function store_info3($CAREER){
//    setcookie("career3","$CAREER",time()+60*60*24*30);
//  }
//  function store_info4($CAREER){
//    setcookie("career4","$CAREER",time()+60*60*24*30);
//  }
//  function store_info5($SELF){
//    setcookie("self1","$SELF",time()+60*60*24*30);
//  }
//  function store_info6($SELF){
//    setcookie("self2","$SELF",time()+60*60*24*30);
//  }
  function store_prof($PROF,$prof_name){
    setcookie($prof_name,"$PROF",time()+60*60*24*30);
  }

  function store_ans($ANSWER,$ans_name){
    setcookie($ans_name,"$ANSWER",time()+60*60*24*30);
  }

  function set_startTime($time_name){
    $start_time = time();
    setcookie($time_name,"$start_time",time()+60*60*24*30);
  }

  function store_time($TIME_NAME,$take_time_name){
    $now = time();
    $take_time = (int)($now - $TIME_NAME);
    setcookie($take_time_name,"$take_time",time()+60*60*24*30);
  }
 ?>
