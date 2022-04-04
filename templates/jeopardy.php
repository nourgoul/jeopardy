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
            <!-- game name -->
<!--            <h1 class="h1">Hello, <?=$_SESSION["name"]?>.</h1> -->
<h1 class="h1">Hello, PLAYER.</h1>
            <h1 class="h1 text-center">JEOPARDY</h1>

            <!-- topic names -->        

            <div class="row">
                <div class="topic btn btn-fix text-center col-2"><div class="well card-box bg-blue"><h4>Topic 1</h4></div></div>
                <div class="topic btn btn-fix text-center col-2"><div class="well card-box bg-blue"><h4>Topic 2</h4></div></div>
                <div class="topic btn btn-fix text-center col-2"><div class="well card-box bg-blue"><h4>Topic 3</h4></div></div>
                <div class="topic btn btn-fix text-center col-2"><div class="well card-box bg-blue"><h4>Topic 4</h4></div></div>
                <div class="topic btn btn-fix text-center col-2"><div class="well card-box bg-blue"><h4>Topic 5</h4></div></div>
            </div>

            <!-- API Question not showing up -->
            <form action="?command=jeopardy" method="post">
            <div class="row">
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                </form>
            </div>

            <form action="?command=jeopardy" method="post">
            <div class="row">
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                </form>
            </div>

            <form action="?command=jeopardy" method="post">
            <div class="row">
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                </form>
            </div>

            <form action="?command=jeopardy" method="post">
            <div class="row">
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                </form>
            </div>

            <form action="?command=jeopardy" method="post">
            <div class="row">
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                <a href="#" class="box btn btn-fix text-center col-2 jeopardy-card"><div class="well card-box bg-blue">
                    <p><?=$question["question"];?></p>
                </div></a>
                </form>
            </div>
        </div>    
        <!-- scores and stuff -->
        <div class="score col-2">
            <h1>Score: 10</h1>

            <div class="exit">
                <a class="btn btn-danger" href="?command=over">End Game</a>
            </div>

        </div>
    </div>
</body>
</html>
