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

    // Load jeopardy question
    private function loadJeopardy()
    {
        $data = $this->db->query("select id, question, answer from question order by rand() limit 1;");
        if (!isset($data[0])) {
            die("No questions in the database");
        }
        $question = $data[0];
        return $question;
    }

    // Jeopardy question function
    private function jeopardy()
    {
        $question = $this->loadJeopardy();
        if ($question == null) {
            die("No questions available");
        }

        $user = [
            "name" => $_SESSION["name"],
            "email" => $_SESSION["email"],
            "score" => $_SESSION["score"]
        ];

        $message = "";
        if (isset($_POST["answer"])) {
            $answer = $_POST["answer"];
            // look up the question that the user answered
            $data = $this->db->query("select answer from question where id = ?;", "i", $_POST["questionid"]);
            if ($data === false) {
                $message = "<div class='alert alert-danger'>An error occurred</div>";
            } else if (!isset($data[0])) {
                $message = "<div class='alert alert-danger'>That question didn't exist</div>";
            } else if ($data[0]["answer"] == $_POST["answer"]) {
                $message = "<div class='alert alert-success'><b>$answer</b> was correct!</div>";

                // whatever the score value of that question was, add it to user score
//                $user["score"] += $_POST["score"];
                $this->db->query("update user set score = ? where email = ?;", "is", $user["score"], $user["email"]);
            } else {
                $message = "<div class='alert alert-danger'><b>$answer</b> was incorrect.  The correct was {$data[0]["answer"]}.</div>";
            }
        }
        include("templates/jeopardy.php");
    }

    private function login()
    {
        if (isset($_POST["email"], $_POST["name"], $_POST["password"]) && !empty($_POST["email"])  && !empty($_POST["name"])  && !empty($_POST["password"])) { /// validate the email coming in
            // REGEX - working
            if (preg_match("/^[a-z][a-z][a-z]?[0-9][a-z][a-z]?[a-z]?@virginia.edu$/", $_POST["email"]) === 0) {
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