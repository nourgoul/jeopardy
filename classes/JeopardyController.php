<?php
// Christian Riewerts and Nour Goulmamine

class JeopardyController
{

    private $command;
    private $db;

    public function __construct($command)
    {
        $this->command = $command;
        $this->db = new Database();
    }

    public function run()
    {
        switch ($this->command) {
            // Jeopardy game - questions
            case "jeopardy":
                $this->jeopardy();
                break;
            // Start session
            case "start":
                $this->start();
                break;
            // Game over
            case "over":
                $this->over();
                break;
            case "login":
                $this->login();
                break;
            // Add cateogry
            case "add":
                $this->add();
                break;
            case "logout":
                $this->endSession();
            case "landing":
            default:
                $this->landing();
        }
    }

    // Load jeopardy questions as associative array
    private function loadJeopardy()
    {
        $uid = 0;
        $zero = 0;
        if (isset($_SESSION["id"])) {
            $uid = $_SESSION["id"];
        }
        $topics = $this->db->query("select * from topic where user_id=? or user_id=? order by rand() limit 5;", "ii", $zero, $uid);
        if (count($topics) != 5) {
            echo "AHHHHHH";
            die("Not enough topics in database");
        }
        $array = array();
        for ($i = 0; $i < 5; $i++) {
            $q = $this->db->query("select * from question where topic_id=? order by value asc limit 5;", "i", $topics[$i]["id"]);
            if (count($q) != 5) {
                echo "AHHHHHH";
                die("Not enough questions");
            }
            $array[$topics[$i]["topic_name"]] = $q;
        }
        echo print_r($array, true);
        return $array;

        /*
        $data = $this->db->query("select id, question, answer from question order by rand();");
        if (!isset($data[0])) {
            die("No questions in the database");
        }
        $rand = rand(1, count($data)-1);
        $question = $data[$rand];
        return $question;
        */
    }

    // Jeopardy question function
    private function jeopardy()
    {
        /*
        $array = array();
        $question = $this->loadJeopardy();
        if ($question == null) {
            die("No questions available");
        }
        for ($i = 0; $i <= 25; $i++) {
            $question = $this->loadJeopardy();
            array_push($array, $question);
        }
        */
        
        $array = $this->loadJeopardy();

        if (isset($_POST["email"], $_POST["name"], $_POST["password"]) && !empty($_POST["email"])  && !empty($_POST["name"])  && !empty($_POST["password"])) {
        $user = [
            "name" => $_SESSION["name"],
            "email" => $_SESSION["email"],
            "score" => $_SESSION["score"]
        ];
    }
/*    
        $message = "";
        $_SESSION["score"] = 0;
        if (isset($_POST["answer"])) {
            $answer = $_POST["answer"];
            if ($_SESSION["answer"] == strtolower($answer)) {
                header("Location: ?command=gameOver");
                // update with real score
                $user["score"] += 10;
            } else {
                $message = "<div class='alert alert-danger'><b>$answer</b> was incorrect.  The correct was {$_SESSION["answer"]}.</div>"; 
            }
        }
        */
        $message = "";
        if (isset($_POST["answer"])) {
            $answer = $_POST["answer"];
            // look up the question that the user answered
            $data = $this->db->query("select answer from question where id = ?;", "i", $_POST["id"]);
            if ($data === false) {
                $message = "<div class='alert alert-danger'>An error occurred</div>";
            } else if (!isset($data[0])) {
                $message = "<div class='alert alert-danger'>That question didn't exist</div>";
            } else if ($data[0]["answer"] == $_POST["answer"]) {
                $message = "<div class='alert alert-success'><b>$answer</b> was correct!</div>";
                // update user score w/real thing
                $user["score"] += 10;
                setcookie("score", $user["score"], time() + 3600);
                $this->db->query("update user set score = ? where email = ?;", "is", $user["score"], $user["email"]);
            } else {
                $message = "<div class='alert alert-danger'><b>$answer</b> was incorrect.  The correct was {$data[0]["answer"]}.</div>";
            }
        }
        include("templates/jeopardy.php");
    }

    private function login()
    {
        if (isset($_POST["email"], $_POST["name"], $_POST["password"]) && !empty($_POST["email"])  && !empty($_POST["name"])  && !empty($_POST["password"])) {
            // REGEX
            if (preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/", $_POST["email"]) === 0) {
                $error_msg = "Submit a valid email.";
                header("Location: ?command=login");
            } else {
            $data = $this->db->query("select * from user where email = ?;", "s", $_POST["email"]);

            if ($data === false) {
                $error_msg = "Error checking for user";
            } else if (empty($data)) { //if there is no user then insert them
                $insert = $this->db->query(
                    "insert into user (name, email, password) values (?, ?, ?);",
                    "sss",
                    $_POST["name"],
                    $_POST["email"],
                    password_hash($_POST["password"], PASSWORD_DEFAULT)
                );
                if ($insert === false) {
                    $error_msg = "Error inserting user";
                }
                $data = $this->db->query("select * from user where email = ?;", "s", $_POST["email"]); //reload data after insert
            }

            if ($data === false) {
                $error_msg = "Error checking for user";
            } else if (!empty($data)) {
                if (password_verify($_POST["password"], $data[0]["password"])) {
                    $_SESSION["name"] = $data[0]["name"];
                    $_SESSION["email"] = $data[0]["email"];
                    $_SESSION["id"] = $data[0]["id"];
                    header("Location: ?command=add");
                } else {
                    $error_msg = "Wrong password";
                }
            }
        }
    }
        include("templates/login.php");
    }

    private function start()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
//        include("templates/jeopardy.php");
        header("Location: ?command=jeopardy");
    }

    private function over()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        // Implement game over template and functionality
        $score = $_SESSION["score"]; // REPLACE THIS WITH SCORE SESSION VARIABLE -- done
        $newHS = "false"; // change this back to false -- done
        $topics = [];
        if (isset($_SESSION["id"])) {
            $data = $this->db->query("select high_score from user where id = ?;", "i", $_SESSION["id"]);
            if ($score > $data[0]["high_score"]) {
                $this->db->query("update user set high_score = ? where id = ?;", "ii", $score, $_SESSION["id"]);
                $newHS = "true";
            }
            $topics = $this->db->query("select * from topic where user_id = ?;", "i", $_SESSION["id"]);
        }

        if (isset($_POST["newHS"])) {
            $newHS = $_POST["newHS"]; // maintain previous high score message
            foreach (array_keys($_POST) as $tid) { // each tid corresponds to a topic id to be deleted
                $this->db->query("delete from question where topic_id = ?;", "i", $tid); // delete related questions
                $this->db->query("delete from topic where id = ?;", "i", $tid); // delete topic itself
            }
            $topics = $this->db->query("select * from topic where user_id = ?;", "i", $_SESSION["id"]); // update topics array
        }
        include("templates/over.php");
    }

    private function endSession()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        unset($_SESSION["id"]);
        session_destroy();
    }

    private function landing()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        include("templates/landing.php");
    }

    private function add()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_POST["top"])) { // if the user submitted a topic and questions
            $this->db->query("insert into topic (topic_name, user_id) values (?, ?);", "si", $_POST["top"], $_SESSION["id"]);
            $tid = $this->db->getInsertId();
            $this->db->query("insert into question (question, answer, value, topic_id) values (?, ?, ?, ?);", "ssii", $_POST["q1"], $_POST["a1"], 200, $tid);
            $this->db->query("insert into question (question, answer, value, topic_id) values (?, ?, ?, ?);", "ssii", $_POST["q2"], $_POST["a2"], 400, $tid);
            $this->db->query("insert into question (question, answer, value, topic_id) values (?, ?, ?, ?);", "ssii", $_POST["q3"], $_POST["a3"], 600, $tid);
            $this->db->query("insert into question (question, answer, value, topic_id) values (?, ?, ?, ?);", "ssii", $_POST["q4"], $_POST["a4"], 800, $tid);
            $this->db->query("insert into question (question, answer, value, topic_id) values (?, ?, ?, ?);", "ssii", $_POST["q5"], $_POST["a5"], 1000, $tid);
        }
        include("templates/add.php");
    }
}