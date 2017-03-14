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
    // verify if the form was submitted
    if (isset($_GET['submit'])) {
        // form submitted
        // verify input
        if (empty($_GET['name']) || is_numeric($_GET['name'])) {
            echo "<p>You didn't enter a valid name!</p>";
        } else {
            echo '<p>Hello ' . $_GET['name'] . '!</p>';
        }
        // display a back button
        echo '<a href="' . $_SERVER['PHP_SELF'] . '">Back</a>';
    } else {
        // form not submitted
        // display the form
        echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"get\">
            <label for=\"name\">What's your name?</label>
            <input type=\"text\" name=\"name\" id=\"name\" size=\"30\">
            <input type=\"submit\" name=\"submit\" value=\"SayHello\">
        </form>";
    }
?>
</body>
</html>


