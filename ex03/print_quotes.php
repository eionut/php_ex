<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Printing Quotes</title>
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
        if ((empty($_POST['quote']) || !trim($_POST['quote'])) || (empty($_POST['author']) || !trim($_POST['author']))) {
            echo '<p>Please enter a quote and the autor!';
            } else {
            $quote = $_POST['quote'];
            $author = $_POST['author'];
            // Print the quote and the author
            echo '<p>' . $author . ' said: "' . $quote .'"</p>';
        }
        // add back link
        echo '<p><a href="' . $_SERVER['PHP_SELF'] . '">Back</a></p>';
    } else {
        // form not submitted
        // print the form
        echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"post\">
            <label for=\"quote\">Enter a quote: </label>
            <textarea name=\"quote\" id=\"quote\"></textarea>
            <label for=\"author\">Enter the author: </label>
            <input type=\"text\" name=\"author\" id=\"author\">
            <input type=\"submit\" name=\"submit\" value=\"Print Quote\">
        </form>";
    }
?>

</body>
</html>

<?php
