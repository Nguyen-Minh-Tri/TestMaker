<?php
    session_start();
    include_once('../model/Users.php');


    $users_model = new Users();
    if(isset($_POST['username']) and isset($_POST['password'])) {
        $res= $users_model->login($_POST);
    }
    else $res= false;

    if ($res == true) {
        // login success
        echo "Success";
        // Save session
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['type'] = $users_model->getType($_POST);
        // echo "\nLogin User: {$_SESSION['username']} Type: {$_SESSION['type']}"; //Test
        //Redirect 
        $url = 'http://'.$_SERVER['SERVER_NAME'].'/TestMaker/dashboard';
        header("Location: $url");
    }
    else {
        //Login failed
        echo "Invalid username/ password";
    }
?>
