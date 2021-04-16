<?php
include_once('constant.php');

class Questions
{
    private $connection;

    private function connect()
    {
        $this->connection = new mysqli(dbIP, 'root', dbPwd, dbName);
    }

    public function addQuestion($session, $post)
    {
        $this->connect();
        $QID = $post['q-id'];
        $content = $post['q-content'];
        $a = $post['ans-1'];
        $b = $post['ans-2'];
        $c = $post['ans-3'];
        $d = $post['ans-4'];
        $correct = $post['correctAnswer'];
        $diff = $post['difficulty'];
        $subject = $post['subject'];
        $creator = $session['username'];

        $sql_cmd = "INSERT INTO questions VALUES ('$QID', '$content', '$a', '$b', '$c', '$d', '$correct', '$diff', '$subject', '$creator');";

        if ($this->connection->query($sql_cmd) !== TRUE) {
            // echo $this->connection->error;
            echo '<script type="text/javascript">
                alert("Can\'t add new question!");
                window.location = "http://' . $_SERVER['SERVER_NAME'] . '/TestMaker/view/add-question.php";
            </script>';
            return;
        }

        // ! Redirect to other page
        // header("Location: http://test-maker.com/questions");

        // close connection
        $this->connection->close();
    }

    // function editQuestion()
    public function editQuestion($session, $post)
    {
        $this->connect();
        $qid = $post['id'];
        $content = $post['content'];
        $a = $post['A'];
        $b = $post['B'];
        $c = $post['C'];
        $d = $post['D'];
        $correct = $post['correct'];
        $diff = $post['difficulty'];
        $subject = $post['subject'];
        $creator = $session['username'];

        $sql_cmd = "UPDATE questions SET content = $content, A = $a, B = $b, C = $c, D = $d, 
        correct = $correct, difficulty = $diff, subject = $subject WHERE id = $qid";

        if ($this->connection->query($sql_cmd) !== TRUE) {
            echo $this->connection->error;
        }

        // ! Redirect to other page
        // header("Location: http://test-maker.com/questions");
        $this->connection->close();
    }
}
?>