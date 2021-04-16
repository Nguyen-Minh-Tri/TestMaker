<?php
    include_once('../model/Questions.php');
    // In edit form, question id is show as placeholder and disable input

    $question_model = new Questions();
    $question_model->editQuestion($_SESSION, $_POST);
?>