<?php
include_once('constant.php');

class Users {
    private $connection;

    private function connect() {
        $this->connection = new mysqli(dbIP, 'root', dbUser, dbName);
        if($this->connection->connect_error) {
            die ("Connection failed");
        }
    }

    function login($post) {
        $this->connect();
        $username = $post['username'];
        $password = $post['password'];
        $_SESSION['username'] = $username;

        $password_h =  hash("sha3-256",$password); //hash password

        $sql = "SELECT * FROM users WHERE username='" .$username. "' AND password='" .$password_h. "'";
        
        $result = $this->connection->query($sql);

        if($result->num_rows == 0) {
            //Login failed
            echo 'failed '.$username.' '.$password_h;
            $this->connection->close();
            return false;
        }
        else {
            //login successs
            //echo 'success' ;
            $this->connection->close();
            return true;
        }
        
    }

    function register($post) {
        $this->connect();
        $username = $post['username'];
        $password = $post['password'];

        $password_h =  hash("sha3-256",$password); //hash password

        $sql_pre = 'SELECT * FROM users';

        $pre = $this->connection->query($sql_pre);

    
        $sql = 'INSERT IGNORE INTO users (username,password,type) VALUES ("' .$username. '","' .$password_h. '","Regular")';

        $result = $this->connection->query($sql);


        $sql_post = 'SELECT * FROM users';

        $pos = $this->connection->query($sql_post);

        if($pos->num_rows <= $pre->num_rows) {
            //Register failed
            echo 'failed '.$username.' '.$password_h.'  '.$sql;
            $this->connection->close();
            return false;
        }
        else {
            //Register successs
            echo 'success' ;
            $this->connection->close();
            return true;
    
        }

    }

    function changeType($post) {
        $this->connect();
        $username = $post['username'];
        $type = $post['type'];
        //Check username
        $sql = 'SELECT * FROM users WHERE username = "' .$username. '" ';
        $result = $this->connection->query($sql);
        if($result->num_rows <0) {
            //No user found
            $this->connection->close();
            return false;
        }

        //Change type
        $sql = 'UPDATE users SET type = "' .$type. '" WHERE username = "' .$username. '" ';
            
        $result = $this->connection->query($sql);

        //return result
        echo 'Done';
        $this->connection->close();
        return true;

        
    }

    function getType($post) {
        $this->connect();
        $username = $post['username'];

        $sql = "SELECT * FROM users WHERE username = '" .$username. "'";
        $result = $this->connection->query($sql);

        if($result->num_rows > 0) {
                //Return type

            echo "Found";
            $r  = $result->fetch_assoc()['type']
            $this->connection->close();
            return $r;
                
        }
        else 
        {
                //No result

            echo "No Result";
            $this->connection->close();
            return NULL;
        }

        
    }

    function changePassword($session,$post) {
        $this->connect();
        $username = $session['username'];
        $newPassword = $post['password'];

        $password_h =  hash("sha3-256",$newPassword);
        //Check username
        $sql = 'SELECT * FROM users WHERE username = "' .$username. '" ';
        $result = $this->connection->query($sql);
        if($result->num_rows <1) {
            //No user found
            
            $this->connection->close();
            return false;
        }

        //Change password
        $sql = 'UPDATE users SET password = "' .$password_h. '" WHERE username = "' .$username. '" ';

        $result = $this->connection->query($sql);

            
        //return result
        echo 'Done';
        
        $this->connection->close();
        return true;

    }
}
?>
