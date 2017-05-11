<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paint calculator</title>
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
    if (!is_numeric($_POST['width']) && !is_numeric($_POST['length'])) {
        echo "<p>Please provide numeric input!</p>";
    } else {
        $width  = $_POST['width'];
        $length = $_POST['length'];
        $area = $width * $length;

        $gallons = ceil($area / 350);

        echo "<p>You will need to purchase {$gallons} gallons of paint to cover {$area} square feet.</p>";
        echo "<p>Go <a href='" . $_SERVER['PHP_SELF'] . "'>back</a>.";
    }
    ?>

<?php else : ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="width">Room width</label>
        <input type="text" name="width" id="width">
        <label for="length">How many pizzas did you buy?</label>
        <input type="text" name="length" id="length">
        <input type="submit" name="submit" value="Calculate!">
    </form>
<?php endif;?>
</body>
</html>