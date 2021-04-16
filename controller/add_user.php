<?php
    include_once('../model/Users.php');


    $users_model = new Users();
    if((isset($_POST['username']) and isset($_POST['password']))  and isset($_POST['confirm_password']) 
    and ($_POST['password'] == $_POST['confirm_password']))
    {
        $res= $users_model->register($_POST);
    }
    else $res= false;

    if ($res == true) {
        //add success
        echo "Success";
        //Redirect 
    }
    else {
        //add failed
        echo "Failed to add user";
    }
?>