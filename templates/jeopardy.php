<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Nour Goulmamine (ng9sc)">
    <meta name="description" content="Jeopardy, trivia, facts, games, learning">

    <title>Jeopardy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">Online Jeopardy</a>
        <?php
        if (isset($_SESSION["id"])) { // if user is logged in, show logout button
            echo '<form class="form-inline"> <a class="btn btn-danger" href="?command=logout">Log Out</a> </form>';
        } else { // if not logged in, show login button
            echo '<form class="form-inline"> <a class="btn btn-success" href="?command=login">Log In</a> </form>';
        }
        ?>
    </nav>

    <!-- title -->
    <div class="container row">
        <div class="col-10 container">
            <?php
            if (isset($_SESSION["id"])) { // if logged in
                echo '<h1 class = "welcome">Hello, ' . $_SESSION["name"] . '!';
            } else { // if not logged in, show login button
                echo '<h1 class = "welcome">Hello, stranger!</h1>';
            }
            ?>

            <h1 class="h1 text-center" id="h1">PLAY JEOPARDY</h1>

            <div class="row">
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4 id="cat1"></h4>
                    </div>
                </div>
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4 id="cat2"></h4>
                    </div>
                </div>
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4 id="cat3"></h4>
                    </div>
                </div>
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4 id="cat4"></h4>
                    </div>
                </div>
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4 id="cat5"></h4>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn1">$200</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn2">$200</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn3">$200</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn4">$200</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn5">$200</button>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn6">$400</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn7">$400</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn8">$400</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn9">$400</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn10">$400</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn11">$600</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn12">$600</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn13">$600</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn14">$600</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn15">$600</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn16">$800</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn17">$800</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn18">$800</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn19">$800</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn20">$800</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn21">$1000</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn22">$1000</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn23">$1000</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn24">$1000</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn25">$1000</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- scores and stuff -->
        <div class="score col-2">
            <h1>Score:
                <span id="score">0</span>
            </h1>

            <div class="exit">
                <a class="btn btn-danger" href="?command=over" id="endgame">End Game</a>
            </div>

        </div>
    </div>

    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" id="question" class="form-label" style="color:black"><?= array_values($array)[0][0]["question"]; ?></label>
                <input type="text" class="form-control" id="answer0" name="answer0" /><br>
                <input type="hidden" name="modNum" value="0">
                <button id="modalSubmit1" class="btn btn-primary modsub" onclick="checkAnswer(0); return false;">Submit</button>
                <div id="message0"></div>
            </form>
        </div>
    </div>

    <div id="myModal1" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[1][0]["question"]; ?></label>
                <input type="text" class="form-control" id="answer1" name="answer1" /><br>
                <input type="hidden" name="modNum" value="1">
                <button id="modalSubmit2" class="btn btn-primary modsub" onclick="checkAnswer(1); return false;">Submit</button>
                <div id="message1"></div>
            </form>
        </div>
    </div>

    <div id="myModal2" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[2][0]["question"]; ?></label>
                <input type="text" class="form-control" id="answer2" name="answer2" /><br>
                <input type="hidden" name="modNum" value="2">
                <button id="modalSubmit3" class="btn btn-primary modsub" onclick="checkAnswer(2); return false;">Submit</button>
                <div id="message2"></div>
            </form>
        </div>
    </div>

    <div id="myModal3" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[3][0]["question"]; ?></label>
                <input type="text" class="form-control" id="answer3" name="answer3" /><br>
                <input type="hidden" name="modNum" value="3">
                <button id="modalSubmit4" class="btn btn-primary modsub" onclick="checkAnswer(3); return false;">Submit</button>
                <div id="message3"></div>
            </form>
        </div>
    </div>

    <div id="myModal4" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[4][0]["question"]; ?></label>
                <input type="text" class="form-control" id="answer4" name="answer4" /><br>
                <input type="hidden" name="modNum" value="4">
                <button id="modalSubmit5" class="btn btn-primary modsub" onclick="checkAnswer(4); return false;">Submit</button>
                <div id="message4"></div>
            </form>
        </div>
    </div>

    <div id="myModal5" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[0][1]["question"]; ?></label>
                <input type="text" class="form-control" id="answer5" name="answer5" /><br>
                <input type="hidden" name="modNum" value="5">
                <button id="modalSubmit6" class="btn btn-primary modsub" onclick="checkAnswer(5); return false;">Submit</button>
                <div id="message5"></div>
            </form>
        </div>
    </div>

    <div id="myModal6" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[1][1]["question"]; ?></label>
                <input type="text" class="form-control" id="answer6" name="answer6" /><br>
                <input type="hidden" name="modNum" value="6">
                <button id="modalSubmit7" class="btn btn-primary modsub" onclick="checkAnswer(6); return false;">Submit</button>
                <div id="message6"></div>
            </form>
        </div>
    </div>

    <div id="myModal7" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[2][1]["question"]; ?></label>
                <input type="text" class="form-control" id="answer7" name="answer7" /><br>
                <input type="hidden" name="modNum" value="7">
                <button id="modalSubmit8" class="btn btn-primary modsub" onclick="checkAnswer(7); return false;">Submit</button>
                <div id="message7"></div>
            </form>
        </div>
    </div>

    <div id="myModal8" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[3][1]["question"]; ?></label>
                <input type="text" class="form-control" id="answer8" name="answer8" /><br>
                <input type="hidden" name="modNum" value="8">
                <button id="modalSubmit9" class="btn btn-primary modsub" onclick="checkAnswer(8); return false;">Submit</button>
                <div id="message8"></div>
            </form>
        </div>
    </div>

    <div id="myModal9" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[4][1]["question"]; ?></label>
                <input type="text" class="form-control" id="answer9" name="answer9" /><br>
                <input type="hidden" name="modNum" value="9">
                <button id="modalSubmit10" class="btn btn-primary modsub" onclick="checkAnswer(9); return false;">Submit</button>
                <div id="message9"></div>
            </form>
        </div>
    </div>

    <div id="myModal10" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[0][2]["question"]; ?></label>
                <input type="text" class="form-control" id="answer10" name="answer10" /><br>
                <input type="hidden" name="modNum" value="10">
                <button id="modalSubmit11" class="btn btn-primary modsub" onclick="checkAnswer(10); return false;">Submit</button>
                <div id="message10"></div>
            </form>
        </div>
    </div>

    <div id="myModal11" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[1][2]["question"]; ?></label>
                <input type="text" class="form-control" id="answer11" name="answer11" /><br>
                <input type="hidden" name="modNum" value="11">
                <button id="modalSubmit12" class="btn btn-primary modsub" onclick="checkAnswer(11); return false;">Submit</button>
                <div id="message11"></div>
            </form>
        </div>
    </div>

    <div id="myModal12" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[2][2]["question"]; ?></label>
                <input type="text" class="form-control" id="answer12" name="answer12" /><br>
                <input type="hidden" name="modNum" value="12">
                <button id="modalSubmit13" class="btn btn-primary modsub" onclick="checkAnswer(12); return false;">Submit</button>
                <div id="message12"></div>
            </form>
        </div>
    </div>

    <div id="myModal13" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[3][2]["question"]; ?></label>
                <input type="text" class="form-control" id="answer13" name="answer13" /><br>
                <input type="hidden" name="modNum" value="13">
                <button id="modalSubmit14" class="btn btn-primary modsub" onclick="checkAnswer(13); return false;">Submit</button>
                <div id="message13"></div>
            </form>
        </div>
    </div>
    <div id="myModal14" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[4][2]["question"]; ?></label>
                <input type="text" class="form-control" id="answer14" name="answer14" /><br>
                <input type="hidden" name="modNum" value="14">
                <button id="modalSubmit15" class="btn btn-primary modsub" onclick="checkAnswer(14); return false;">Submit</button>
                <div id="message14"></div>
            </form>
        </div>
    </div>
    <div id="myModal15" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[0][3]["question"]; ?></label>
                <input type="text" class="form-control" id="answer15" name="answer15" /><br>
                <input type="hidden" name="modNum" value="15">
                <button id="modalSubmit16" class="btn btn-primary modsub" onclick="checkAnswer(15); return false;">Submit</button>
                <div id="message15"></div>
            </form>
        </div>
    </div>
    <div id="myModal16" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[1][3]["question"]; ?></label>
                <input type="text" class="form-control" id="answer16" name="answer16" /><br>
                <input type="hidden" name="modNum" value="16">
                <button id="modalSubmit17" class="btn btn-primary modsub" onclick="checkAnswer(16); return false;">Submit</button>
                <div id="message16"></div>
            </form>
        </div>
    </div>
    <div id="myModal17" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[2][3]["question"]; ?></label>
                <input type="text" class="form-control" id="answer17" name="answer17" /><br>
                <input type="hidden" name="modNum" value="17">
                <button id="modalSubmit18" class="btn btn-primary modsub" onclick="checkAnswer(17); return false;">Submit</button>
                <div id="message17"></div>
            </form>
        </div>
    </div>
    <div id="myModal18" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[3][3]["question"]; ?></label>
                <input type="text" class="form-control" id="answer18" name="answer18" /><br>
                <input type="hidden" name="modNum" value="18">
                <button id="modalSubmit19" class="btn btn-primary modsub" onclick="checkAnswer(18); return false;">Submit</button>
                <div id="message18"></div>
            </form>
        </div>
    </div>
    <div id="myModal19" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[4][3]["question"]; ?></label>
                <input type="text" class="form-control" id="answer19" name="answer19" /><br>
                <input type="hidden" name="modNum" value="19">
                <button id="modalSubmit20" class="btn btn-primary modsub" onclick="checkAnswer(19); return false;">Submit</button>
                <div id="message19"></div>
            </form>
        </div>
    </div>
    <div id="myModal20" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[0][4]["question"]; ?></label>
                <input type="text" class="form-control" id="answer20" name="answer20" /><br>
                <input type="hidden" name="modNum" value="20">
                <button id="modalSubmit21" class="btn btn-primary modsub" onclick="checkAnswer(20); return false;">Submit</button>
                <div id="message20"></div>
            </form>
        </div>
    </div>
    <div id="myModal21" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[1][4]["question"]; ?></label>
                <input type="text" class="form-control" id="answer21" name="answer21" /><br>
                <input type="hidden" name="modNum" value="21">
                <button id="modalSubmit22" class="btn btn-primary modsub" onclick="checkAnswer(21); return false;">Submit</button>
                <div id="message21"></div>
            </form>
        </div>
    </div>
    <div id="myModal22" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[2][4]["question"]; ?></label>
                <input type="text" class="form-control" id="answer22" name="answer22" /><br>
                <input type="hidden" name="modNum" value="22">
                <button id="modalSubmit23" class="btn btn-primary modsub" onclick="checkAnswer(22); return false;">Submit</button>
                <div id="message22"></div>
            </form>
        </div>
    </div>
    <div id="myModal23" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[3][4]["question"]; ?></label>
                <input type="text" class="form-control" id="answer23" name="answer23" /><br>
                <input type="hidden" name="modNum" value="23">
                <button id="modalSubmit24" class="btn btn-primary modsub" onclick="checkAnswer(23); return false;">Submit</button>
                <div id="message23"></div>
            </form>
        </div>
    </div>
    <div id="myModal24" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black"><?= array_values($array)[4][4]["question"]; ?></label>
                <input type="text" class="form-control" id="answer24" name="answer24" /><br>
                <input type="hidden" name="modNum" value="24">
                <button id="modalSubmit25" class="btn btn-primary modsub" onclick="checkAnswer(24); return false;">Submit</button>
                <div id="message24"></div>
            </form>
        </div>
    </div>
    </div>

    <!--    
    <p id="christiantest">test</p>
    <p id="scorestest">
        -->
    <p>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            // JQuery
            $(document).ready(function() {
                $("#h1").hover(function() {
                        alert("Get ready to play!");
                    },
                    function() {});
            });
            $('#modalSubmit1').click(function() {
                $('#answer0').attr('disabled', 'disabled');
            });

            $(document).ready(function() {
                $('#modalSubmit2').click(function() {
                    $('#answer1').attr('disabled', 'disabled');
                });
                $('#modalSubmit3').click(function() {
                    $('#answer2').attr('disabled', 'disabled');
                });
                $('#modalSubmit4').click(function() {
                    $('#answer3').attr('disabled', 'disabled');
                });
                $('#modalSubmit5').click(function() {
                    $('#answer4').attr('disabled', 'disabled');
                });
                $('#modalSubmit6').click(function() {
                    $('#answer5').attr('disabled', 'disabled');
                });
                $('#modalSubmit7').click(function() {
                    $('#answer6').attr('disabled', 'disabled');
                });
                $('#modalSubmit8').click(function() {
                    $('#answer7').attr('disabled', 'disabled');
                });
                $('#modalSubmit9').click(function() {
                    $('#answer8').attr('disabled', 'disabled');
                });
                $('#modalSubmit10').click(function() {
                    $('#answer9').attr('disabled', 'disabled');
                });
                $('#modalSubmit11').click(function() {
                    $('#answer10').attr('disabled', 'disabled');
                });
                $('#modalSubmit12').click(function() {
                    $('#answer11').attr('disabled', 'disabled');
                });
                $('#modalSubmit13').click(function() {
                    $('#answer12').attr('disabled', 'disabled');
                });
                $('#modalSubmit14').click(function() {
                    $('#answer13').attr('disabled', 'disabled');
                });
                $('#modalSubmit15').click(function() {
                    $('#answer14').attr('disabled', 'disabled');
                });
                $('#modalSubmit16').click(function() {
                    $('#answer15').attr('disabled', 'disabled');
                });
                $('#modalSubmit17').click(function() {
                    $('#answer16').attr('disabled', 'disabled');
                });
                $('#modalSubmit18').click(function() {
                    $('#answer17').attr('disabled', 'disabled');
                });
                $('#modalSubmit19').click(function() {
                    $('#answer18').attr('disabled', 'disabled');
                });
                $('#modalSubmit20').click(function() {
                    $('#answer19').attr('disabled', 'disabled');
                });
                $('#modalSubmit21').click(function() {
                    $('#answer20').attr('disabled', 'disabled');
                });
                $('#modalSubmit22').click(function() {
                    $('#answer21').attr('disabled', 'disabled');
                });
                $('#modalSubmit23').click(function() {
                    $('#answer22').attr('disabled', 'disabled');
                });
                $('#modalSubmit24').click(function() {
                    $('#answer23').attr('disabled', 'disabled');
                });
                $('#modalSubmit25').click(function() {
                    $('#answer24').attr('disabled', 'disabled');
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        <script>
            var boardArrayObj = <?php echo json_encode($array); ?>;
            var topics = <?php echo json_encode(array_keys($array)); ?>;
            var answersList = formatBoardArray();
            var scoresList = getScores();
            var score = 0;
            document.getElementById("christiantest").innerHTML = answersList;
            document.getElementById("scorestest").innerHTML = scoresList;

            function formatBoardArray() {
                var checking = [];
                for (let i = 0; i < 5; i++) {
                    for (let j = 0; j < 5; j++) {
                        checking.push(boardArrayObj[topics[j]][i]["answer"]);
                    }
                }
                return checking;
            }

            function getScores() {
                var checking = [];
                for (let i = 0; i < 5; i++) {
                    for (let j = 0; j < 5; j++) {
                        checking.push(boardArrayObj[topics[j]][i]["value"]);
                    }
                }
                return checking;
            }

            function updateScore() {
                var ajax = new XMLHttpRequest();
                ajax.open("GET", "?command=updSco&currSco=" + score.toString(), true);
                ajax.send(null);
            }

            // AJAX Query
            function getQuestion() {
                // instantiate the object
                var ajax = new XMLHttpRequest();
                // open the request
                ajax.open("GET", "?command=loadJeopardy", true);
                // ask for a specific response
                ajax.responseType = "json";
                // send the request
                ajax.send(null);
                // What happens if the load succeeds
                ajax.addEventListener("load", function() {
                    // set question
                    if (this.status == 200) { // worked 
                        question = this.response;
                        displayQuestion();
                    }
                });
                // What happens on error
                ajax.addEventListener("error", function() {
                    document.getElementById("message").innerHTML =
                        "<div class='alert alert-danger'>An Error Occurred</div>";
                });
            }

            // Method to display a question
            function displayQuestion() {
                // Why innerHTML and not textContent?
                document.getElementById("question").innerHTML = question.question;
            }

            function checkAnswer(num) {
                var elemid = "answer" + num.toString();
                var userGuess = document.getElementById(elemid).value;
                var answer = answersList[num];
                var value = scoresList[num];
                document.getElementById(elemid).value = "";

                if (userGuess.toLowerCase() == answer.toLowerCase()) {
                    // got it right
                    score += value;
                    updateScore();
                    document.getElementById("score").textContent = score;
                    document.getElementById("message" + num.toString()).innerHTML =
                        "<div class='alert alert-success'>Correct!</div>";
                } else {
                    document.getElementById("message" + num.toString()).innerHTML =
                        "<div class='alert alert-danger'>Incorrect.</div>";
                }
                return false;
            }
        </script>
        <script type="text/javascript">
            // JavaScript Object
            const categories = {
                firstCategory: "<?= array_keys($array)[0]; ?>",
                secondCategory: "<?= array_keys($array)[1]; ?>",
                thirdCategory: "<?= array_keys($array)[2]; ?>",
                fourthCategory: "<?= array_keys($array)[3]; ?>",
                fifthCategory: "<?= array_keys($array)[4]; ?>",
            };

            document.getElementById("cat1").innerHTML = categories.firstCategory;
            document.getElementById("cat2").innerHTML = categories.secondCategory;
            document.getElementById("cat3").innerHTML = categories.thirdCategory;
            document.getElementById("cat4").innerHTML = categories.fourthCategory;
            document.getElementById("cat5").innerHTML = categories.fifthCategory;

            // DOM Manipulation - Hide buttons once exiting modal
            // Modify style / content - Modals pop up when clicking button
            var modal = document.getElementById("myModal");
            var modal1 = document.getElementById("myModal1");
            var modal2 = document.getElementById("myModal2");
            var modal3 = document.getElementById("myModal3");
            var modal4 = document.getElementById("myModal4");
            var modal5 = document.getElementById("myModal5");
            var modal6 = document.getElementById("myModal6");
            var modal7 = document.getElementById("myModal7");
            var modal8 = document.getElementById("myModal8");
            var modal9 = document.getElementById("myModal9");
            var modal10 = document.getElementById("myModal10");
            var modal11 = document.getElementById("myModal11");
            var modal12 = document.getElementById("myModal12");
            var modal13 = document.getElementById("myModal13");
            var modal14 = document.getElementById("myModal14");
            var modal15 = document.getElementById("myModal15");
            var modal16 = document.getElementById("myModal16");
            var modal17 = document.getElementById("myModal17");
            var modal18 = document.getElementById("myModal18");
            var modal19 = document.getElementById("myModal19");
            var modal20 = document.getElementById("myModal20");
            var modal21 = document.getElementById("myModal21");
            var modal22 = document.getElementById("myModal22");
            var modal23 = document.getElementById("myModal23");
            var modal24 = document.getElementById("myModal24");
            // Get the button that opens the modal
            var btn1 = document.getElementById("myBtn1");
            var btn2 = document.getElementById("myBtn2");
            var btn3 = document.getElementById("myBtn3");
            var btn4 = document.getElementById("myBtn4");
            var btn5 = document.getElementById("myBtn5");
            var btn6 = document.getElementById("myBtn6");
            var btn7 = document.getElementById("myBtn7");
            var btn8 = document.getElementById("myBtn8");
            var btn9 = document.getElementById("myBtn9");
            var btn10 = document.getElementById("myBtn10");
            var btn11 = document.getElementById("myBtn11");
            var btn12 = document.getElementById("myBtn12");
            var btn13 = document.getElementById("myBtn13");
            var btn14 = document.getElementById("myBtn14");
            var btn15 = document.getElementById("myBtn15");
            var btn16 = document.getElementById("myBtn16");
            var btn17 = document.getElementById("myBtn17");
            var btn18 = document.getElementById("myBtn18");
            var btn19 = document.getElementById("myBtn19");
            var btn20 = document.getElementById("myBtn20");
            var btn21 = document.getElementById("myBtn21");
            var btn22 = document.getElementById("myBtn22");
            var btn23 = document.getElementById("myBtn23");
            var btn24 = document.getElementById("myBtn24");
            var btn25 = document.getElementById("myBtn25");
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            var span1 = document.getElementsByClassName("close")[1];
            var span2 = document.getElementsByClassName("close")[2];
            var span3 = document.getElementsByClassName("close")[3];
            var span4 = document.getElementsByClassName("close")[4];
            var span5 = document.getElementsByClassName("close")[5];
            var span6 = document.getElementsByClassName("close")[6];
            var span7 = document.getElementsByClassName("close")[7];
            var span8 = document.getElementsByClassName("close")[8];
            var span9 = document.getElementsByClassName("close")[9];
            var span10 = document.getElementsByClassName("close")[10];
            var span11 = document.getElementsByClassName("close")[11];
            var span12 = document.getElementsByClassName("close")[12];
            var span13 = document.getElementsByClassName("close")[13];
            var span14 = document.getElementsByClassName("close")[14];
            var span15 = document.getElementsByClassName("close")[15];
            var span16 = document.getElementsByClassName("close")[16];
            var span17 = document.getElementsByClassName("close")[17];
            var span18 = document.getElementsByClassName("close")[18];
            var span19 = document.getElementsByClassName("close")[19];
            var span20 = document.getElementsByClassName("close")[20];
            var span21 = document.getElementsByClassName("close")[21];
            var span22 = document.getElementsByClassName("close")[22];
            var span23 = document.getElementsByClassName("close")[23];
            var span24 = document.getElementsByClassName("close")[24];

            // Arrow Function
            btn1.onclick = () => {
                modal.style.display = "block";
            }
            btn2.onclick = () => {
                modal1.style.display = "block";
            }
            btn3.onclick = () => {
                modal2.style.display = "block";
            }
            btn4.onclick = function() {
                modal3.style.display = "block";
            }
            btn5.onclick = function() {
                modal4.style.display = "block";
            }
            btn6.onclick = function() {
                modal5.style.display = "block";
            }
            btn7.onclick = function() {
                modal6.style.display = "block";
            }
            btn8.onclick = function() {
                modal7.style.display = "block";
            }
            btn9.onclick = function() {
                modal8.style.display = "block";
            }
            btn10.onclick = function() {
                modal9.style.display = "block";
            }
            btn11.onclick = function() {
                modal10.style.display = "block";
            }
            btn12.onclick = function() {
                modal11.style.display = "block";
            }
            btn13.onclick = function() {
                modal12.style.display = "block";
            }
            btn14.onclick = function() {
                modal13.style.display = "block";
            }
            btn15.onclick = function() {
                modal14.style.display = "block";
            }
            btn16.onclick = function() {
                modal15.style.display = "block";
            }
            btn17.onclick = function() {
                modal16.style.display = "block";
            }
            btn18.onclick = function() {
                modal17.style.display = "block";
            }
            btn19.onclick = function() {
                modal18.style.display = "block";
            }
            btn20.onclick = function() {
                modal19.style.display = "block";
            }
            btn21.onclick = function() {
                modal20.style.display = "block";
            }
            btn22.onclick = function() {
                modal21.style.display = "block";
            }
            btn23.onclick = function() {
                modal22.style.display = "block";
            }
            btn24.onclick = function() {
                modal23.style.display = "block";
            }
            btn25.onclick = function() {
                modal24.style.display = "block";
            }

            // Once all 25 buttons are submitted, end game.
            $(document).ready(function() {
                var count = 0;
                $(".modsub").click(function() {
                    count += 1;
                    if (count == 25)
                        alert("ALL DONE! Time to end your game.");
                });
            });


            // Anonymous Function
            span.onclick = function() {
                modal.style.display = "none";
                btn1.style.visibility = "hidden";
            }

            span1.onclick = function() {
                modal1.style.display = "none";
                btn2.style.visibility = "hidden";
            }

            span2.onclick = function() {
                modal2.style.display = "none";
                btn3.style.visibility = "hidden";
            }

            span3.onclick = function() {
                modal3.style.display = "none";
                btn4.style.visibility = "hidden";
            }
            span4.onclick = function() {
                modal4.style.display = "none";
                btn5.style.visibility = "hidden";
            }
            span5.onclick = function() {
                modal5.style.display = "none";
                btn6.style.visibility = "hidden";
            }
            span6.onclick = function() {
                modal6.style.display = "none";
                btn7.style.visibility = "hidden";
            }
            span7.onclick = function() {
                modal7.style.display = "none";
                btn8.style.visibility = "hidden";
            }
            span8.onclick = function() {
                modal8.style.display = "none";
                btn9.style.visibility = "hidden";
            }
            span9.onclick = function() {
                modal9.style.display = "none";
                btn10.style.visibility = "hidden";
            }
            span10.onclick = function() {
                modal10.style.display = "none";
                btn11.style.visibility = "hidden";
            }
            span11.onclick = function() {
                modal11.style.display = "none";
                btn12.style.visibility = "hidden";
            }
            span12.onclick = function() {
                modal12.style.display = "none";
                btn13.style.visibility = "hidden";
            }
            span13.onclick = function() {
                modal13.style.display = "none";
                btn14.style.visibility = "hidden";
            }
            span14.onclick = function() {
                modal14.style.display = "none";
                btn15.style.visibility = "hidden";
            }
            span15.onclick = function() {
                modal15.style.display = "none";
                btn16.style.visibility = "hidden";
            }
            span16.onclick = function() {
                modal16.style.display = "none";
                btn17.style.visibility = "hidden";
            }
            span17.onclick = function() {
                modal17.style.display = "none";
                btn18.style.visibility = "hidden";
            }
            span18.onclick = function() {
                modal18.style.display = "none";
                btn19.style.visibility = "hidden";
            }
            span19.onclick = function() {
                modal19.style.display = "none";
                btn20.style.visibility = "hidden";
            }
            span20.onclick = function() {
                modal20.style.display = "none";
                btn21.style.visibility = "hidden";
            }
            span21.onclick = function() {
                modal21.style.display = "none";
                btn22.style.visibility = "hidden";
            }
            span22.onclick = function() {
                modal22.style.display = "none";
                btn23.style.visibility = "hidden";
            }
            span23.onclick = function() {
                modal23.style.display = "none";
                btn24.style.visibility = "hidden";
            }
            span24.onclick = function() {
                modal24.style.display = "none";
                btn24.style.visibility = "hidden";
            }
        </script>
</body>

</html>