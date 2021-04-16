<?php
class QuestionController
{
    public function view($status, $id = null)
    {
        if ($status = 'add') {
            $opts = array('http' => array('header' => 'Cookie: ' . $_SERVER['HTTP_COOKIE'] . "\r\n"));
            $context = stream_context_create($opts);
            session_write_close(); // unlock the file

            $result = file_get_contents('http://' . $_SERVER['SERVER_NAME'] . '/TestMaker/view/add-question.php', false, $context);
            session_start();
            return $result;
        } else {
            $data = http_build_query(array('id' => $id));
            
            $options = array( 
                'http' => array(
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                    "Content-Length: ".strlen($data)."\r\n".
                    "User-Agent:MyAgent/1.0\r\n", 
                'method' => 'GET', 
                'content' => $data) 
            ); 

            $stream = stream_context_create($options);

            $result = file_get_contents('http://' . $_SERVER['SERVER_NAME'] . '/TestMaker/view/add-question.php', false, $stream);
            return $result;
        }
    }
}
?>