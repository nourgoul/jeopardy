<?php
    /**
     * Jeopardy Game Project
     * Helped by: Selena Johnson and Coby Chiu (Scj4ve and cc6hkb) on Jeopardy Controller
     * https://www.sqlshack.com/convert-sql-server-results-json/
     * Demo live at: https://cs4640.cs.virginia.edu/car2xz/sprint3/
     */

    spl_autoload_register(function ($classname) {
        include "classes/$classname.php";
    });
    
    session_start();

    $command = "landing"; // default
    if (isset($_GET["command"])) {
        $command = $_GET["command"];
    }
    if ($command === "login" && isset($_SESSION["id"])) { // don't let user log in if they're already logged in
        $command = "landing";
    }
    if ($command === "add" && !isset($_SESSION["id"])) { // users that aren't logged in can't add new questions
        $command = "landing";
    }

    if ($command === "over" && !isset($_SESSION["score"])) { // if score not set, they weren't playing a game so dont let them see game over screen
        $command = "landing";
    }

    $game = new JeopardyController($command);
    $game->run();