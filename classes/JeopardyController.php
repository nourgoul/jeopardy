<?php

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
            case "jeopardy":
                $this->jeopardy();
                break;
            case "over":
                $this->over();
                break;
            case "login":
                $this->login();
                break;
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

    private function login()
    {

        if (isset($_POST["email"], $_POST["name"], $_POST["password"]) && !empty($_POST["email"])  && !empty($_POST["name"])  && !empty($_POST["password"])) { /// validate the email coming in
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
        include("templates/login.php");
    }

    private function jeopardy()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        include("templates/jeopardy.php");
    }

    private function over()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        // Implement game over template and functionality
        $score = 1000; // REPLACE THIS WITH SCORE SESSION VARIABLE
        $newHS = "true"; // change this back to false
        $topics = [];
        if (isset($_SESSION["id"])) {
            $data = $this->db->query("select high_score from user where id = ?;", "i", $_SESSION["id"]); 
             if ($score > $data[0]["high_score"]) {
                $this->db->query("update user set high_score = ? where id = ?;", "ii", $score, $_SESSION["id"]);
                $newHS = "false";
             }
            $topics = $this->db->query("select * from topic where user_id = ?;", "i", $_SESSION["id"]);
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
            $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q1"], $_POST["a1"], $tid);
            $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q2"], $_POST["a2"], $tid);
            $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q3"], $_POST["a3"], $tid);
            $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q4"], $_POST["a4"], $tid);
            $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q5"], $_POST["a5"], $tid);
            if ($_POST["q6"] !== "" && $_POST["a6"] !== "") { // check before inserting each optional question-answer pairing
                $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q6"], $_POST["a6"], $tid);
            }
            if ($_POST["q7"] !== "" && $_POST["a7"] !== "") { // check before inserting each optional question-answer pairing
                $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q7"], $_POST["a7"], $tid);
            }
            if ($_POST["q8"] !== "" && $_POST["a8"] !== "") { // check before inserting each optional question-answer pairing
                $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q8"], $_POST["a8"], $tid);
            }
            if ($_POST["q9"] !== "" && $_POST["a9"] !== "") { // check before inserting each optional question-answer pairing
                $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q9"], $_POST["a9"], $tid);
            }
            if ($_POST["q10"] !== "" && $_POST["a10"] !== "") { // check before inserting each optional question-answer pairing
                $this->db->query("insert into question (question, answer, topic_id) values (?, ?, ?);", "ssi", $_POST["q10"], $_POST["a10"], $tid);
            }
        }
        include("templates/add.php");
    }
}
