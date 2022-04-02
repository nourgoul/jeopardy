<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Christian Riewerts (car2xz)">
    <meta name="description" content="Online Jeopardy landing page">
    <meta name="keywords" content="Jeopardy, trivia, facts, games, learning">

    <title>Add A Topic</title>

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
        <section class="row add-form">
            <div class="col-12 add-form">
                <h1>Add A Category</h1>
                <form action="?command=add" method="post">
                    <label for="top">Topic Name:</label>
                    <input type="text" id="top" name="top" required><br><br>
                    <div class="col-6 add-form">
                        <label for="q1">Question 1:</label>
                        <input type="text" id="q1" name="q1" required><br><br>
                        <label for="q2">Question 2:</label>
                        <input type="text" id="q2" name="q2" required><br><br>
                        <label for="q3">Question 3:</label>
                        <input type="text" id="q3" name="q3" required><br><br>
                        <label for="q4">Question 4:</label>
                        <input type="text" id="q4" name="q4" required><br><br>
                        <label for="q5">Question 5:</label>
                        <input type="text" id="q5" name="q5" required><br><br>
                        <label for="q6">Question 6:</label>
                        <input type="text" id="q6" name="q6"><br><br>
                        <label for="q7">Question 7:</label>
                        <input type="text" id="q7" name="q7"><br><br>
                        <label for="q8">Question 8:</label>
                        <input type="text" id="q8" name="q8"><br><br>
                        <label for="q9">Question 9:</label>
                        <input type="text" id="q9" name="q9"><br><br>
                        <label for="q10">Question 10:</label>
                        <input type="text" id="q10" name="q10"><br><br>
                    </div>
                    <div class="col-6 add-form">
                        <label for="a1">Answer 1:</label>
                        <input type="text" id="a1" name="a1" required><br><br>
                        <label for="a2">Answer 2:</label>
                        <input type="text" id="a2" name="a2" required><br><br>
                        <label for="a3">Answer 3:</label>
                        <input type="text" id="a3" name="a3" required><br><br>
                        <label for="a4">Answer 4:</label>
                        <input type="text" id="a4" name="a4" required><br><br>
                        <label for="a5">Answer 5:</label>
                        <input type="text" id="a5" name="a5" required><br><br>
                        <label for="a6">Answer 6:</label>
                        <input type="text" id="a6" name="a6"><br><br>
                        <label for="a7">Answer 7:</label>
                        <input type="text" id="a7" name="a7"><br><br>
                        <label for="a8">Answer 8:</label>
                        <input type="text" id="a8" name="a8"><br><br>
                        <label for="a9">Answer 9:</label>
                        <input type="text" id="a9" name="a9"><br><br>
                        <label for="a10">Answer 10:</label>
                        <input type="text" id="a10" name="a10"><br><br>
                    </div>
                    <button type="submit" class="btn btn-primary sub-button">Submit</button>
                    <a class="btn btn-success" href="?command=jeopardy">Start Game</a>
                </form>
            </div>
        </section>
    </div>

</body>

</html>