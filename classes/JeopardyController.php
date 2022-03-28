<?php
    
    class JeopardyController {

        private $command;

        public function __construct($command) {
            $this->command = $command;
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
            include("templates/add.php");
        }

    }