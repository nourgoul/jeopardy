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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <form action="?command=question" method="post">
                    <div class="h-100 p-5 bg-dark border rounded-3">
                    <h1 class = "gameOver">Game Over</h1>
                    <p>quedjede</p>
                    </div>
                    <div class="h-10 p-5 mb-3">
                        <input type="text" class="form-control" id="answer" name="answer" placeholder="Type your answer here">
                    </div>
                    <div class="text-center">      
                    <input type="hidden" name="questionid" value="NEWHS HERE">          
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="?command=logout" class="btn btn-danger">End Game</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>