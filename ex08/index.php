<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza party</title>
    <style>
        label,
        input[type="submit"] {
            display: block;
        }

        input {
            padding: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <?php if (isset($_POST['submit'])) : ?>

    <?php
        if (!is_numeric($_POST['people']) && !is_numeric($_POST['pizzas']) && !is_numeric($_POST['slices'])) {
            echo "<p>The values you entered aren't numbers. Please <a href='" . $_SERVER['PHP_SELF'] . "'>provide good input</a>!";
        } else {
            $people = $_POST['people'];
            $pizzas = $_POST['pizzas'];
            $slices = $_POST['slices'];

            $totalSlices = $pizzas * $slices;
            $remainingSlices = $totalSlices % $people;
            $slicesForEach = ($totalSlices - $remainingSlices) / $people;

            echo "<p>{$people} people with {$pizzas} pizzas.</p>";
            echo "<p>Each person gets {$slicesForEach} pieces of pizza.</p>";
            echo "<p>There are {$remainingSlices} leftover pieces.</p>";

        }
    ?>

    <?php else : ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="people">How many people are at the party?</label>
        <input type="text" name="people" id="people">
        <label for="pizzas">How many pizzas did you buy?</label>
        <input type="text" name="pizzas" id="pizzas">
        <label for="slices">How many slices has each pizza?</label>
        <input type="text" name="slices" id="slices">
        <input type="submit" name="submit" value="Give me pizza!">
    </form>
    <?php endif;?>
</body>
</html>