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

            <h1 class="h1 text-center">PLAY JEOPARDY</h1>

            <!-- topic names -->

            <div class="row">
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4>Category 1</h4>
                    </div>
                </div>
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4>Category 2</h4>
                    </div>
                </div>
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4>Category 3</h4>
                    </div>
                </div>
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4>Category 4</h4>
                    </div>
                </div>
                <div class="topic btn btn-fix text-center col-2">
                    <div class="well card-box bg-blue">
                        <h4>Category 5</h4>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn1" onclick="disableButton();">$200</button>
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
            <?= $_SESSION["score"] ?>
        </h1>

        <div class="exit">
            <a class="btn btn-danger" href="?command=over">End Game</a>
        </div>

    </div>
    </div>

    <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[0]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal1" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[1]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal2" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[2]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal3" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[3]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal4" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[4]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal5" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[5]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal6" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[6]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal7" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[7]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal8" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[8]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal9" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[9]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal10" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[10]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal11" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[11]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal12" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[12]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>

        <div id="myModal13" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[13]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal14" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[14]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal15" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[15]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal16" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[16]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal17" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[17]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal18" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[18]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal19" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[19]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal20" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[20]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal21" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[21]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal22" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[22]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal23" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[23]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>
        <div id="myModal24" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <form class="white" method="post">
                    <label for="guess" class="form-label" style="color:black"><?= $array[24]["question"]; ?></label>
                    <input type="text" class="form-control" id="answer" name="answer" /><br>
                    <button id="modalSubmit" class="btn btn-primary">Submit</button>
                </form>
                <span class="close">&times;</span>
            </div>
        </div>


    </div>

    <script>
        // Get the modal
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
        // Modal submit button
        //        var submit = document.getElementById("modalSubmit");
        // When the user clicks the button, open the modal 
        btn1.onclick = function() {
            modal.style.display = "block";
        }
        btn2.onclick = function() {
            modal1.style.display = "block";
        }
        btn3.onclick = function() {
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
        // When the user clicks on <span> (x), close the modal
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
            btn25.style.visibility = "hidden";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>