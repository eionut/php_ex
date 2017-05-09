<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area calculator</title>
</head>
<body>
    <?php
        // validate input
        if (!is_numeric($_POST['width']) || !is_numeric($_POST['length'])) {
            echo "<p>You must enter both the width and the height of the room, in feet.</p>";
            echo "<p><a href='index.html'>Go Back!</a></p>";
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
</body>
</html>