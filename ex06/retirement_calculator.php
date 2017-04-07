<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retirement calculator</title>
    <style>
        input, textarea {
            display: block;
            margin: 10px 0;
        }
        textarea {
            width: 350px;
            height: 100px;
        }
    </style>
</head>
<body>
<?php
// check if the form was submitted
if (isset($_POST['submit'])) {
    // form submitted
    // validate input
    if ((empty($_POST['number1']) || !trim($_POST['number2'])) || (empty($_POST['number1']) || !trim($_POST['number2']))) {
        echo '<p>Please enter two numbers!';
    } else {
        $number1 = (float)$_POST['number1'];
        $number2 = (float)$_POST['number2'];

        // Do the math
        $sum = $number1 + $number2;
        $diff = $number1 - $number2;
        $prod = $number1 * $number2;
        $quot = $number1 / $number2;

        echo '<p>' . $number1 . ' + ' . $number2 . ' = ' . $sum . '</p>';
        echo '<p>' . $number1 . ' - ' . $number2 . ' = ' . $diff . '</p>';
        echo '<p>' . $number1 . ' * ' . $number2 . ' = ' . $prod . '</p>';
        echo '<p>' . $number1 . ' / ' . $number2 . ' = ' . $quot . '</p>';
    }
    // add back link
    echo '<p><a href="' . $_SERVER['PHP_SELF'] . '">Back</a></p>';
} else {
    // form not submitted
    // print the form
    echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"post\">
            <label for=\"number1\">Enter first number: </label>
            <input type=\"text\" name=\"number1\" id=\"number1\">
            <label for=\"number2\">Enter second number: </label>
            <input type=\"text\" name=\"number2\" id=\"number2\">
            <input type=\"submit\" name=\"submit\" value=\"Calculate!\">
        </form>";
}
?>

</body>
</html>

<?php
