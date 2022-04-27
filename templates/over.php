<!-- WORKING INDEX LINK: https://cs4640.cs.virginia.edu/ng9sc/sprint2/ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Christian Riewerts (car2xz)">
    <meta name="description" content="Online Jeopardy game over page">
    <meta name="keywords" content="Jeopardy, trivia, facts, games, learning">

    <title>Game Over</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

    <div class="container" style="margin-top: 15px;">
        <div class="row col-xs-8">
        </div>
        <div class="row">
            <div class="col-xs-8 mx-auto">
                <form action="?command=over" method="post">
                    <div class="h-100 p-5 bg-dark border rounded-3">
                        <h1 class="gameOver">Game Over</h1>
                        <h2 class="gameOver">Score: <?= $score ?></h2>
                        <?php
                        if ($newHS === "true") {
                            echo '<h3 class = "gameOver">NEW PERSONAL HIGH SCORE!</h3>';
                        }
                        ?>
                    </div>
                    <div class="h-100 p-5 mt-4 mb-4 bg-dark border rounded-3">
                        <h5 class="gameOver">Select Topics You Wish To Delete</h5>
                        <?php
                        if (count($topics) !== 0) {
                            for ($i = 0; $i < count($topics); $i++) {
                                echo '<input type="checkbox" id="' . $topics[$i]["id"] . '" name="' . $topics[$i]["id"] . '" value="' . $topics[$i]["topic_name"] . '">';
                                echo '<label class = "gameOver" for="' . $topics[$i]["id"] . '">' . $topics[$i]["topic_name"] . '</label><br>';
                            }
                        } else if (isset($_SESSION["id"])) {
                            echo '<h6 class = "gameOver">ERROR: You have no saved personal topics.</h6>';
                        } else {
                            echo '<h6 class = "gameOver">ERROR: Must be signed in to access personal topics.</h6>';
                        }
                        ?>
                    </div>
                    <div class="text-center">
                        <?php
                        echo '<input type="hidden" name="newHS" value="' . $newHS . '">'; // check this for POST submission and also to display newHS message corectly
                        if (count($topics) !== 0) {
                            echo '<button type="submit" class="btn btn-warning">Delete Selected</button>';
                        }
                        ?>
                        <a href="?command=start" class="btn btn-success">Play Again</a>
                        <a href="?command=logout" class="btn btn-danger">Log Out</a>
                        <button class="btn btn-primary" id="btn1">A Note</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <form class="white" method="post">
                <span class="close">&times;</span>
                <label for="guess" class="form-label" style="color:black">I hope you enjoyed our game...</label>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // Dynamic Behavior - DOM Manipulation (button hides once exiting modal)
        // Dynamic Behavior - Modify style / content (Modals pop up when clicking button)
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("btn1");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
            return false;
        }
        span.onclick = function() {
            modal.style.display = "none";
            btn1.style.visibility = "hidden";
        }
    </script>
</body>

</html>