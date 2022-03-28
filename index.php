<?php
    /**
     * Jeopardy Game Project
     * 
     */

    spl_autoload_register(function ($classname) {
        include "classes/$classname.php";
    });
    
    session_start();

    $command = "landing"; // default
    if (isset($_GET["command"])) {
        $command = $_GET["command"];
    }

    $game = new JeopardyController($command);
    $game->run();