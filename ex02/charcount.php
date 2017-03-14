<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>What's your name?</title>
    <style>
        input {
            display: block;
            margin: 10px 0;
        }
    </style>
</head>
<body>
<?php
    // check if form was submitted
    if (isset($_GET['submit'])) {
        //form submitted
        // validate input
        if (empty($_GET['word']) || !trim($_GET['word'])) {
            echo "<p>Enter a valid string!</p>";
        } else {
            echo "<p>|{$_GET['word']}| has " . strlen($_GET['word']) . " characters.</p>";
        }
        // add back link
        echo '<a href="' . $_SERVER['PHP_SELF'] . '">Back</a>';
    } else {
        // form not submitted
        // display form
        echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="get">
                <label for="word">Give me a string!</label>
                <input type="text" name="word" id="word">
                <input type="submit" name="submit" value="Count!">
            </form>';
    }
?>
</body>
</html>