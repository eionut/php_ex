<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mad Lib</title>
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
    if ((empty($_POST['noun']) || !trim($_POST['noun'])) || (empty($_POST['verb']) || !trim($_POST['verb'])) || (empty($_POST['adverb']) || !trim($_POST['adverb'])) || (empty($_POST['adjective']) || !trim($_POST['adjective']))) {
        echo '<p>Please enter a noun, a verb, an adverb and an adjective!';
    } else {
        $noun = $_POST['noun'];
        $verb = $_POST['verb'];
        $adverb = $_POST['adverb'];
        $adjective = $_POST['adjective'];

        // Print the story
        echo '<p>Do you ' . $verb . ' your ' . $adjective . ' ' . $noun . ' ' .$adverb . '?</p>';
    }
    // add back link
    echo '<p><a href="' . $_SERVER['PHP_SELF'] . '">Back</a></p>';
} else {
    // form not submitted
    // print the form
    echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"post\">
            <label for=\"noun\">Enter a noun: </label>
            <input type=\"text\" name=\"noun\" id=\"noun\">
            <label for=\"verb\">Enter a verb: </label>
            <input type=\"text\" name=\"verb\" id=\"verb\">
            <label for=\"adverb\">Enter an adverb: </label>
            <input type=\"text\" name=\"adverb\" id=\"adverb\">
            <label for=\"adjective\">Enter an adjective: </label>
            <input type=\"text\" name=\"adjective\" id=\"adjective\">
            <input type=\"submit\" name=\"submit\" value=\"Tell me the story!\">
        </form>";
}
?>

</body>
</html>

<?php
