<?php

class LoginController {

        public function view($theme) {
        $data = http_build_query(array('Theme' => $theme)); 
        $options = array( 
            'http' => array(
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                "Content-Length: ".strlen($data)."\r\n".
                "User-Agent:MyAgent/1.0\r\n", 
            'method' => 'GET',
            'content' => $data) 
        ); 
        
        // Create a context stream with 
        // the specified options 
        $stream = stream_context_create($options); 
        
        // The data is stored in the  
        // result variable 
        $result = file_get_contents('http://'.$_SERVER['SERVER_NAME'].'/TestMaker/view/login.php', false, $stream);

        return $result;
    }

}
?>