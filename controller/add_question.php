<?php
    session_start();
    include_once('../model/Question.php');
    // Check content, difficulty and subject are valid

    $question_model = new Questions();
    $question_model->addQuestion($_SESSION, $_POST);
?>