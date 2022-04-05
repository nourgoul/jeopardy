<?php
spl_autoload_register(function ($classname) {
    include "classes/$classname.php";
});

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = new mysqli(Config::$db["host"], Config::$db["user"], Config::$db["pass"], Config::$db["database"]);


$db->query("drop table if exists user;");
$db->query("drop table if exists topic;");
$db->query("drop table if exists question;");

$db->query("create table user (
                id int not null auto_increment,
                email text not null,
                name text not null,
                password text not null,
                high_score int default 0,
                primary key (id)
            );");

$db->query("create table topic (
                id int not null auto_increment,
                topic_name text not null,
                user_id int not null,
                primary key (id)
            );");


$db->query("create table question (
                id int not null auto_increment,
                question text not null,
                answer text not null,
                value int not null,
                topic_id int not null,
                primary key (id)
            );");

            // Jeopardy questions go into "questions" table
$triviaData = json_decode(file_get_contents("https://opentdb.com/api.php?amount=50"), true);

print_r($triviaData);

$stmt = $db ->prepare("insert into question (question, answer, topic_id, value) values (?, ?, ?, ?);");

$topic_id = 5;
$value = 200;
foreach ($triviaData["results"] as $qn){
    $stmt->bind_param("ssii", $qn["question"], $qn["correct_answer"], $topic_id, $value);

    if(!$stmt->execute()){
        echo "could not add question: {$qn["question"]}\n";
    }
}