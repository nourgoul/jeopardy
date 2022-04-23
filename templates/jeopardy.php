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

            <!-- API Question not showing up -->
            <div onclick="popUp();">
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$200</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$200</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$200</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$200</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$200</button>
                        </div>
                    </div>
                </div>
            </div>

            <div onclick="answerQuestion();">
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$400</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$400</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$400</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$400</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$400</button>
                        </div>
                    </div>
                </div>
            </div>

            <div onclick="answerQuestion();">
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$600</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$600</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$600</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$600</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$600</button>
                        </div>
                    </div>
                </div>
            </div>

            <div onclick="answerQuestion();">
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$800</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$800</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$800</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$800</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$800</button>
                        </div>
                    </div>
                </div>
            </div>

            <form method="post">
                <div class="row">
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$1000</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$1000</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$1000</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$1000</button>
                        </div>
                    </div>
                    <div class="box btn btn-fix text-center col-2 jeopardy-card">
                        <div class="well card-box bg-blue">
                            <button class="boxes" id="myBtn">$1000</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!-- scores and stuff -->
    <div class="score col-2">
        <h1>Score:
            <?= // Actual score var
            $_SESSION["score"]
            ?>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal
        var btn = document.getElementsByClassName("boxes");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks the button, open the modal 
        for (var i = 0; i < btn.length; i++) {
            btn[i].onclick = function() {
                modal.style.display = "block";
            }
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
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