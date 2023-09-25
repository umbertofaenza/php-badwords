<?php

$paragraph = $_GET["paragraph"];
$paragraph_length = strlen($paragraph);

$banned_word = $_GET["banned"];

$censored_paragraph = str_replace($banned_word, "*** ", $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <!-- paragraph -->
    <p>
    <h2>Paragraph:</h2>
        <?php 
        echo $paragraph;
        ?>
        <h4>
            Length: 
            <?php 
        echo $paragraph_length;
        ?>
        </h4>
    </p>

    <!-- censored paragraph -->
    <p>
    <h2>Paragraph:</h2>
        <?php 
        echo $censored_paragraph;
        ?>
        <h4>
            Length: 
            <?php 
        echo $censored_paragraph_length;
        ?>
        </h4>
    </p>
</body>
</html>

