<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITA 355 Exam</title>
</head>
<body>
    <header>
        <h1>Exam 1</h1>
    </header>
    <main>
        <section>
            <h2>Exam Instructions</h2>
            <p>Answer all of the questions and do your best!</p>
        </section>
        <section>
            <h2>Exam Questions</h2>
            <form action="SubmitExam.php" method="post">
                <div>
                    <label>1. What are condition statements used for?</label><br>
                    <input type="radio" name="question_1" value="To test a condition to determine whether or not to run a code block."> To test a condition to determine whether or not to run a code block.<br>
                    <input type="radio" name="question_1" value="To define arguments"> To define arguments<br>
                    <input type="radio" name="question_1" value="To Create a Database"> To Create a Database<br>
                    <input type="radio" name="question_1" value="To form code blocks"> To form code blocks<br>
                </div>
                <div>
                    <label>2. Which is the correct code for displaying text in PHP?</label><br>
                    <input type="radio" name="question_2" value="echo"> echo <br>
                    <input type="radio" name="question_2" value="print"> print<br>
                    <input type="radio" name="question_2" value="$_print"> $_print<br>
                    <input type="radio" name="question_2" value="$_echo"> $_echo<br>
                </div>
                <div>
                    <label>3. Which superglobal array in PHP is used to collect form data sent via POST?</label><br>
                    <input type="radio" name="question_3" value="$_GET"> $_GET<br>
                    <input type="radio" name="question_3" value="$_POST"> $_POST<br>
                    <input type="radio" name="question_3" value="$_SESSION"> $_SESSION<br>
                    <input type="radio" name="question_3" value="$_COOKIE"> $_COOKIE<br>
                </div>
                <div>
                    <label>4. What function is used to start a PHP session?</label><br>
                    <input type="radio" name="question_4" value="session_start()"> session_start()<br>
                    <input type="radio" name="question_4" value="start_session()"> start_session()<br>
                    <input type="radio" name="question_4" value="initiate_session()"> initiate_session()<br>
                    <input type="radio" name="question_4" value="new_session()"> new_session()<br>
                </div>
                <div>
                    <label>5. Which of the following is used to connect to a MySQL database in PHP?</label><br>
                    <input type="radio" name="question_5" value="mysqli_connect()"> mysqli_connect()<br>
                    <input type="radio" name="question_5" value="connect_db()"> connect_db()<br>
                    <input type="radio" name="question_5" value="mysql_connect()"> mysql_connect()<br>
                    <input type="radio" name="question_5" value="open_database()"> open_database()<br>
                </div>
                <button type="submit">Submit Exam</button>
            </form>
        </section>
    </main>
</body>
</html>
