<?php
    require_once 'dbhelper.php';

    $cmd_exam = "select * from question";
    $res_exam = excuteResult($cmd_exam);
    
    echo json_encode($res_exam, JSON_UNESCAPED_UNICODE);
    exit();
?>

