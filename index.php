<?php
include('inc/quiz.php');
// var_dump($question)
// var_dump($_POST["answer"]);
// var_dump($_POST["index"]);
// echo implode('</br>',$_SESSION);
// var_dump($_SESSION);
// var_dump($_SESSION['totalCorrect']);
// var_dump($index);

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
            <?php if($show_score == false) {
            echo '<p class="breadcrumbs">' .
                  "Question " . count($_SESSION['used_indexes']) .
                 " of " . $total_questions; "</p>";
            echo '<p class="quiz"> What is ' . $question["leftAdder"] . 
                  '+' . $question["rightAdder"] .  '?</p>';
            echo '<form action="index.php" method="post">';
            echo '<input type="hidden" name="index" value="'. $index .'" />';
            echo '<input type="submit" class="btn" name="answer" value="' . $answers[0] . '" />';
            echo '<input type="submit" class="btn" name="answer" value="' . $answers[1] . '" />';
            echo '<input type="submit" class="btn" name="answer" value="' . $answers[2] . '" />';
            echo '</form>';
            }?>
            <?php if($show_score == true){
            echo "<p>You got " .$_SESSION['totalCorrect'] . " out of " . $total_questions . " correct!" . "</p>";
            }       ?>
        </div>
    </div>
</body>
</html>