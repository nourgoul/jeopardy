<?php
// Christian Riewerts and Nour Goulmamine

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
/*
$triviaData = json_decode(file_get_contents("https://opentdb.com/api.php?amount=100"), true);
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
*/

function st_exec($s) {
    if (!$s->execute()) {
        echo "Failure\n";
    }
}


$stmt_top = $db ->prepare("insert into topic (id, topic_name, user_id) values (?, ?, ?);");
$stmt_q = $db ->prepare("insert into question (question, answer, topic_id, value) values (?, ?, ?, ?);");

// Topic 1: Movies
$n = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$sc = [200, 400, 600, 800, 1000];
$top = "Movies";
$stmt_top->bind_param("isi", $n[1], $top, $n[0]);
st_exec($stmt_top);
$q = "Where were The Lord of the Rings movies filmed?";
$a = "New Zealand";
$stmt_q->bind_param("ssii", $q, $a, $n[1], $sc[0]);
st_exec($stmt_q);
$q = "Who voices Joy in Pixar's Inside Out?";
$a = "Amy Poehler";
$stmt_q->bind_param("ssii", $q, $a, $n[1], $sc[1]);
st_exec($stmt_q);
$q = "Freddy Krueger's iconic striped sweater is red and ___?";
$a = "Green";
$stmt_q->bind_param("ssii", $q, $a, $n[1], $sc[2]);
st_exec($stmt_q);
$q = "The code in The Matrix comes from what food recipes?";
$a = "Sushi";
$stmt_q->bind_param("ssii", $q, $a, $n[1], $sc[3]);
st_exec($stmt_q);
$q = "What was the highest grossing movie of 2014?";
$a = "Guardians of the Galaxy";
$stmt_q->bind_param("ssii", $q, $a, $n[1], $sc[4]);
st_exec($stmt_q);

// Topic 2: Music
$top = "Music";
$stmt_top->bind_param("isi", $n[2], $top, $n[0]);
st_exec($stmt_top);
$q = "Who was the first American Idol winner?";
$a = "Kelly Clarkson";
$stmt_q->bind_param("ssii", $q, $a, $n[2], $sc[0]);
st_exec($stmt_q);
$q = "Which Rolling Stones song was written by John Lennon and Paul McCartney?";
$a = "I Wanna Be Your Man";
$stmt_q->bind_param("ssii", $q, $a, $n[2], $sc[1]);
st_exec($stmt_q);
$q = "What was Madonna's first top 10 hit?";
$a = "Holiday";
$stmt_q->bind_param("ssii", $q, $a, $n[2], $sc[2]);
st_exec($stmt_q);
$q = "Who founded Motown Records?";
$a = "Berry Gordy";
$stmt_q->bind_param("ssii", $q, $a, $n[2], $sc[3]);
st_exec($stmt_q);
$q = "What was Freddie Mercury's real name?";
$a = "Farrokh Bulsara";
$stmt_q->bind_param("ssii", $q, $a, $n[2], $sc[4]);
st_exec($stmt_q);

// Topic 3: Celebrities
$top = "Celebrities";
$stmt_top->bind_param("isi", $n[3], $top, $n[0]);
st_exec($stmt_top);
$q = "Which celebrity is known as JLo?";
$a = "Jennifer Lopez";
$stmt_q->bind_param("ssii", $q, $a, $n[3], $sc[0]);
st_exec($stmt_q);
$q = "What year was Selena Gomez born?";
$a = "1992";
$stmt_q->bind_param("ssii", $q, $a, $n[3], $sc[1]);
st_exec($stmt_q);
$q = "What was the first name of Donald Trump's first wife?";
$a = "Ivana";
$stmt_q->bind_param("ssii", $q, $a, $n[3], $sc[2]);
st_exec($stmt_q);
$q = "In what country was Heath Ledger born?";
$a = "Australia";
$stmt_q->bind_param("ssii", $q, $a, $n[3], $sc[3]);
st_exec($stmt_q);
$q = "What is Ricky Gervais' middle name?";
$a = "Dene";
$stmt_q->bind_param("ssii", $q, $a, $n[3], $sc[4]);
st_exec($stmt_q);

// Topic 4: Basketball
$top = "Basketball";
$stmt_top->bind_param("isi", $n[4], $top, $n[0]);
st_exec($stmt_top);
$q = "What college did Michael Jordan attend?";
$a = "University of North Carolina";
$stmt_q->bind_param("ssii", $q, $a, $n[4], $sc[0]);
st_exec($stmt_q);
$q = "Who is the only player to score 100 points in an NBA game?";
$a = "Wilt Chamberlain";
$stmt_q->bind_param("ssii", $q, $a, $n[4], $sc[1]);
st_exec($stmt_q);
$q = "Who is the NBA's all-time leader in triple-doubles?";
$a = "Russell Westbrook";
$stmt_q->bind_param("ssii", $q, $a, $n[4], $sc[2]);
st_exec($stmt_q);
$q = "When did the Atlanta Hawks last win an NBA championship?";
$a = "1958";
$stmt_q->bind_param("ssii", $q, $a, $n[4], $sc[3]);
st_exec($stmt_q);
$q = "Who was the 8th overall pick in the 2017 NBA draft?";
$a = "Frank Ntilikina";
$stmt_q->bind_param("ssii", $q, $a, $n[4], $sc[4]);
st_exec($stmt_q);

// Topic 5: Baseball
$top = "Baseball";
$stmt_top->bind_param("isi", $n[5], $top, $n[0]);
st_exec($stmt_top);
$q = "Which MLB team has won the most World Series?";
$a = "New York Yankees";
$stmt_q->bind_param("ssii", $q, $a, $n[5], $sc[0]);
st_exec($stmt_q);
$q = "Who was named the MVP of the 2014 World Series?";
$a = "Madison Bumgarner";
$stmt_q->bind_param("ssii", $q, $a, $n[5], $sc[1]);
st_exec($stmt_q);
$q = "What city is The National Baseball Hall of Fame and Museum located in?";
$a = "Cooperstown";
$stmt_q->bind_param("ssii", $q, $a, $n[5], $sc[2]);
st_exec($stmt_q);
$q = "A quality start is when a starting pitcher pitches at least six innings and allows _ earned runs or fewer?";
$a = "3";
$stmt_q->bind_param("ssii", $q, $a, $n[5], $sc[3]);
st_exec($stmt_q);
$q = "Which active MLB player has the most career homeruns?";
$a = "Albert Pujols";
$stmt_q->bind_param("ssii", $q, $a, $n[5], $sc[4]);
st_exec($stmt_q);

// Topic 6: Football
$top = "Football";
$stmt_top->bind_param("isi", $n[6], $top, $n[0]);
st_exec($stmt_top);
$q = "How many Super Bowls have the Green Bay Packers won?";
$a = "4";
$stmt_q->bind_param("ssii", $q, $a, $n[6], $sc[0]);
st_exec($stmt_q);
$q = "How many games are in an NFL regular season?";
$a = "17";
$stmt_q->bind_param("ssii", $q, $a, $n[6], $sc[1]);
st_exec($stmt_q);
$q = "How many Super Bowls has Tom Brady won?";
$a = "7";
$stmt_q->bind_param("ssii", $q, $a, $n[6], $sc[2]);
st_exec($stmt_q);
$q = "Who was the first overall pick in the 2021 NFL draft?";
$a = "Trevor Lawrence";
$stmt_q->bind_param("ssii", $q, $a, $n[6], $sc[3]);
st_exec($stmt_q);
$q = "What team reached the Super Bowl 4 years in a row, but lost all 4 times?";
$a = "Buffalo Bills";
$stmt_q->bind_param("ssii", $q, $a, $n[6], $sc[4]);
st_exec($stmt_q);

// Topic 7: Slogans
$top = "Slogans";
$stmt_top->bind_param("isi", $n[7], $top, $n[0]);
st_exec($stmt_top);
$q = "Whose slogan is \"The taste of a new generation\"?";
$a = "Pepsi";
$stmt_q->bind_param("ssii", $q, $a, $n[7], $sc[0]);
st_exec($stmt_q);
$q = "Whose slogan is \"Believe in your smellf\"?";
$a = "17";
$stmt_q->bind_param("ssii", $q, $a, $n[7], $sc[1]);
st_exec($stmt_q);
$q = "Whose slogan is \"Get your own box\"?";
$a = "Cheez-It";
$stmt_q->bind_param("ssii", $q, $a, $n[7], $sc[2]);
st_exec($stmt_q);
$q = "Whose slogan is \"Play. Laugh. Grow\"?";
$a = "Fisher-Price";
$stmt_q->bind_param("ssii", $q, $a, $n[7], $sc[3]);
st_exec($stmt_q);
$q = "Whose slogan is \"Let your fingers do the walking\"?";
$a = "Yellow Pages";
$stmt_q->bind_param("ssii", $q, $a, $n[7], $sc[4]);
st_exec($stmt_q);

// Topic 8: TV Shows
$top = "TV Shows";
$stmt_top->bind_param("isi", $n[8], $top, $n[0]);
st_exec($stmt_top);
$q = "What is the name of Negan's bat on The Walking Dead?";
$a = "Lucille";
$stmt_q->bind_param("ssii", $q, $a, $n[8], $sc[0]);
st_exec($stmt_q);
$q = "Which Game of Thrones star was nominated for an Emmy for every single season?";
$a = "Peter Dinklage";
$stmt_q->bind_param("ssii", $q, $a, $n[8], $sc[1]);
st_exec($stmt_q);
$q = "South Park takes place in which state?";
$a = "Colorado";
$stmt_q->bind_param("ssii", $q, $a, $n[8], $sc[2]);
st_exec($stmt_q);
$q = "Family Matters began as a spinoff of which sitcom?";
$a = "Perfect Strangers";
$stmt_q->bind_param("ssii", $q, $a, $n[8], $sc[3]);
st_exec($stmt_q);
$q = "On The Good Place, Jason Mendoza is a fan of which NFL team?";
$a = "Jacksonville Jaguars";
$stmt_q->bind_param("ssii", $q, $a, $n[8], $sc[4]);
st_exec($stmt_q);

// Topic 9: Video Games
$top = "Video Games";
$stmt_top->bind_param("isi", $n[9], $top, $n[0]);
st_exec($stmt_top);
$q = "Solid Snake is the hero of which video game franchise?";
$a = "Metal Gear";
$stmt_q->bind_param("ssii", $q, $a, $n[9], $sc[0]);
st_exec($stmt_q);
$q = "What is the name of the first video game ever created?";
$a = "Pong";
$stmt_q->bind_param("ssii", $q, $a, $n[9], $sc[1]);
st_exec($stmt_q);
$q = "What game is the cyborg ninja \"Genji\" from?";
$a = "Overwatch";
$stmt_q->bind_param("ssii", $q, $a, $n[9], $sc[2]);
st_exec($stmt_q);
$q = "In the Pokémon games, what does Feebas evolve into?";
$a = "Milotic";
$stmt_q->bind_param("ssii", $q, $a, $n[9], $sc[3]);
st_exec($stmt_q);
$q = "In Minecraft, Phantoms will attack the player at night if they go too long without doing what?";
$a = "Sleeping";
$stmt_q->bind_param("ssii", $q, $a, $n[9], $sc[4]);
st_exec($stmt_q);

// Topic 10: UVA
$top = "UVA";
$stmt_top->bind_param("isi", $n[10], $top, $n[0]);
st_exec($stmt_top);
$q = "What is the name of the UVA fight song?";
$a = "The Good Ol' Song";
$stmt_q->bind_param("ssii", $q, $a, $n[10], $sc[0]);
st_exec($stmt_q);
$q = "What NCAA conference does UVA belong to?";
$a = "ACC";
$stmt_q->bind_param("ssii", $q, $a, $n[10], $sc[1]);
st_exec($stmt_q);
$q = "What year was Tony Bennett named the head coach of the UVA men's basketball team?";
$a = "2009";
$stmt_q->bind_param("ssii", $q, $a, $n[10], $sc[2]);
st_exec($stmt_q);
$q = "What state is UVA Baseball star Jake Gelof from?";
$a = "Delaware";
$stmt_q->bind_param("ssii", $q, $a, $n[10], $sc[3]);
st_exec($stmt_q);
$q = "By how many points did UVA football win the Belk Bowl in 2018?";
$a = "28";
$stmt_q->bind_param("ssii", $q, $a, $n[10], $sc[4]);
st_exec($stmt_q);

?>