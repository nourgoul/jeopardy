<?php
    
    class JeopardyController {

        private $command;
        private $db;

        public function __construct($command) {
            $this->command = $command;
            $this->db = new Database();
        }

        public function run() {
            switch($this->command) {
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

        private function login() {
            if(!isset($_SESSION)) { 
                session_start(); 
            } 
            // Implement login template and functionality
            include("templates/login.php");
        }

        private function jeopardy() {
            if(!isset($_SESSION)) { 
                session_start(); 
            }
            include("templates/jeopardy.php");
        }

        private function over() {
            if(!isset($_SESSION)) { 
                session_start(); 
            }
            // Implement game over template and functionality

            include("templates/over.php");
        }

        private function endSession() {
            if(!isset($_SESSION)) { 
                session_start(); 
            }
            session_destroy();
        }

        private function landing() {
            if(!isset($_SESSION)) { 
                session_start(); 
            }
            include("templates/landing.php");
        }

        private function add() {
            if(!isset($_SESSION)) { 
                session_start(); 
            }
            $tid = 99;
            if (isset($_POST["top"])) { // if the user submitted a topic and questions
                $this->db->query("insert into topic (topic_name, user_id) values (?, ?);", "si", $_POST["top"], 23); // change 23 to user id (session variable?)
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