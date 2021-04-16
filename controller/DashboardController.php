<?php
class DashboardController
{
    public function view()
    {
        // The data is stored in the  
        // result variable 
        $opts = array('http' => array('header' => 'Cookie: ' . $_SERVER['HTTP_COOKIE'] . "\r\n"));
        $context = stream_context_create($opts);
        session_write_close(); // unlock the file
        $result = file_get_contents('http://' . $_SERVER['SERVER_NAME'] . '/TestMaker/view/dashboard.php', false, $context);
        session_start(); // Lock the file
        return $result;
    }
}
?>