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
    if ((empty($_POST['age']) || !trim($_POST['age'])) || (empty($_POST['ret_age']) || !trim($_POST['ret_age']))) {
        echo '<p>Please enter two numbers!';
    } else {
        $age = (int)$_POST['age'];
        $ret_age = (int)$_POST['ret_age'];
        $y_left = $ret_age - $age;
        $c_year = (int)date("Y");
        $r_year = $c_year + $y_left;

        // Do the math
        echo "<p>You are {$age} years. You have to wait {$y_left} years until you can retire.</p>";
        echo "<p>It's {$c_year}, so you can retire in " . $r_year . "</p>";
    }
    // add back link
    echo '<p><a href="' . $_SERVER['PHP_SELF'] . '">Back</a></p>';
} else {
    // form not submitted
    // print the form
    echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"post\">
            <label for=\"age\">Enter your age: </label>
            <input type=\"text\" name=\"age\" id=\"age\">
            <label for=\"ret_age\">Enter the desired retirement age: </label>
            <input type=\"text\" name=\"ret_age\" id=\"ret_age\">
            <input type=\"submit\" name=\"submit\" value=\"Calculate!\">
        </form>";
}
?>

</body>
</html>

<?php
