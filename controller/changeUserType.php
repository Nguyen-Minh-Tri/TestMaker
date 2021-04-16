<?php
    include_once('../model/Users.php');


    $users_model = new Users();
    if(isset($_POST['username']) and isset($_POST['type'])) {
        $res= $users_model->changeType($_POST);
    }
    else $res= false;

    if ($res == true) {
        // success
        // session_start();
        // echo "Success";
        // Save session
        // $_SESSION['username'] = $_POST['username'];
        // $_SESSION['type'] = $users_model->getType($_POST);
        // echo "\nLogin User: {$_SESSION['username']} Type: {$_SESSION['type']}";
        //Redirect 
        // $url = 'http://'.$_SERVER['SERVER_NAME'].'/TestMaker/dashboard';
        // header("Location: $url");
    }
    else {
        //Login failed
        echo "failed to change type";
    }
?>
