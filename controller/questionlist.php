<?php
    session_start();
    include_once('../model/QuestionList.php');
    $listQuest = new QuestionList();

    if(!isset($_SESSION['dificulty'])){
        $_SESSION['dificulty'] = "All";
    }
    
    if(!isset($_SESSION['category'])){
        $_SESSION['category'] = "";
    }

    if(!isset($_SESSION['page_num'])){
        $_SESSION['page_num'] = 1;
    }

    if(!isset($_SESSION['pagesizenum'])){
        $_SESSION['pagesizenum'] = 10;
    }
    
    $listQ = $listQuest->getList($_SESSION['dificulty'],$_SESSION['category'],$_SESSION['page_num'],$_SESSION['pagesizenum'],$_SESSION['username']);
    //$listQ = $listQuest->getList('All',$condition,1,5,'');
?>