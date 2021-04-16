<?php 
include_once('constant.php');

    class QuestionList {
        protected $_table;
        protected $session;
        private $_connect;

        public function __construct() {
            $tbname ='questions';

            // echo "connecting\n";

            $this->_connect = new mysqli(dbIP,'root',dbPwd, dbName);

            $this->_table = $tbname;

            if($this->_connect->connect_error) {
                die ("Connection failed");
            }
            
        }

        public function connect() { //return connection to db
            return $this->_connect;
        }
       


        function getList($Difficulty_cond, $category , $page , $page_size, $session) {

            if ($Difficulty_cond == "All"){
                $Difficulty_cond = "";
                if ($category == "All"){
                    $category = "";
                }
                $category_temp = "WHERE subject = '" .$category. "'";
            }
                
            else if ($Difficulty_cond == "Easy"){
                $Difficulty_cond = "WHERE difficulty = 'easy'";
                if ($category != ""){
                    $category_temp = "AND subject = '" .$category. "'";
                }
            }

            else if ($Difficulty_cond == "Medium"){
                $Difficulty_cond = "WHERE difficulty = 'medium'";
                if ($category != ""){
                    $category_temp = "AND subject = '" .$category. "'";
                }
            }

            else if ($Difficulty_cond == "Hard"){
                $Difficulty_cond = "WHERE difficulty = 'difficult'";
                if ($category != ""){
                    $category_temp = "AND subject = '" .$category. "'";
                }
            }

            if ($category =="") $category_temp="";   
            $sql = "SELECT * FROM " .$this->_table. " " .$Difficulty_cond. " ".$category_temp. " ORDER BY  FIELD('" .$session. "',creator)DESC,creator LIMIT " . ( ($page - 1) * $page_size) . "," . $page_size ;
            echo($sql);
            $result = $this->_connect->query($sql);

            $arr = array_fill(0,$page_size,-1); //Empty element = id(-1)
            $ind = 0;
            if($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()){
                    // echo "id: " .$row['id']. "/subject:" .$row['subject']. "/difficulty:" .$row['difficulty']. "/creator:" .$row['creator']. "<br>";
                    $arr[$ind] = $this->getCon($row['id']);
                    $ind = $ind +1;
                }
            }

            return $arr;
        }


        function getCon($id) {
            $sql1 = "SELECT * FROM " .$this->_table. " WHERE id = " .$id ;
            $result1 = $this->_connect->query($sql1);

            $arr = array_fill(0,10,'');

            if($result1->num_rows >0) {
                $row = $result1->fetch_assoc();
                $arr[0] = $row["content"];
                $arr[1] = $row["A"];
                $arr[2] = $row["B"];
                $arr[3] = $row["C"];
                $arr[4] = $row["D"];
                $arr[5] = $row["correct"];
                $arr[6] = $row["difficulty"];
                $arr[7] = $row["subject"];
                $arr[8] = $row['creator'];
                $arr[9]= $row['id'];
            }
            else {
                //No result found
            }

            return $arr;

        }

    }
?>