<?php
    if (empty($_GET['name']) || is_numeric($_GET['name'])) {
        echo "<p>You didn't enter a valid name!</p>";
    } else {
        echo '<p>Hello ' . $_GET['name'] . '!</p>';
    }
