<!-- WORKING INDEX LINK: https://cs4640.cs.virginia.edu/ng9sc/sprint2/ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Christian Riewerts (car2xz)">
    <meta name="description" content="Online Jeopardy landing page">
    <meta name="keywords" content="Jeopardy, trivia, facts, games, learning">

    <title>Online Jeopardy</title>

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

    <div class="container">
        <section class="row homepage">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="images/alex.jpg" alt="Alex Trebek">
                    <div class="card-body">
                        <h5 class="card-title">How To Play</h5>
                        <p class="card-text">
                            Press the button below to get started! You will be prompted to enter new topics and
                            questions, which will be saved to your account if you choose to do so. Any saved topics may
                            be used in future randomly generated game boards. Afterwards, you will be able to proceed to
                            a randomly generated game board and play Jeopardy!
                        </p>
                        <a href="?command=add" class="btn btn-primary main-button">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </section>
    </div>

</body>

</html>