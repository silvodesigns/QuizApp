<?php
include('inc/quiz.php');
// var_dump($question)
var_dump($_POST["answer"]);
var_dump($_POST["index"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div id="quiz-box">
            <?php if(!empty($toast_message)) { echo $toast_message;}?>
            <p class="breadcrumbs"><?php echo "Question " . 1 . " of " . $total_questions; ?></p>
            <p class="quiz"><?php echo "What is " . $question["leftAdder"] . "+" . $question["rightAdder"] .  "?"   ?></p>
            <form action="index.php" method="post">
                <input type="hidden" name="index" value="<?php echo $index; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answers[0]; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answers[1]; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answers[2]; ?>" />
            </form>
        </div>
    </div>
</body>
</html>