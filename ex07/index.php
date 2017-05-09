<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area of a Rectangular Room</title>
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
        // validate input
        if (!is_numeric($_POST['width']) || !is_numeric($_POST['length'])) {
            echo "<p>You must enter both the width and the height of the room, in feet.</p>";
            echo "<p><a href='index.php'>Go Back!</a></p>";
        } else {
            $length = $_POST['length'];
            $width = $_POST['width'];

            $areaF = $length * $width;
            $areaM = $areaF * pow(0.3048, 2);

            echo "<p>Room's area is:</p>";
            echo "<ul>";
            echo "<li>$areaF sqare feet</li>";
            echo "<li>$areaM square meters</li>";
            echo "</ul>";
        }
        ?>

    <?php else : ?>
        <form action="index.php" method="post">
            <label for="length">Enter the length of the room in feet</label>
            <input type="text" name="length" id="length" value="<?php if (isset($_POST['length'])) { echo $_POST['length'];};?>">
            <label for="width">Enter the width of the room in feet</label>
            <input type="text" name="width" id="width" value="<?php if (isset($_POST['width'])) { echo $_POST['width'];};?>">
            <input type="submit" name="submit" value="Calculate!">
        </form>
    <?php endif; ?>
</body>
</html>