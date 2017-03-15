<?php
    $quote = $_POST['quote'];
    $author = $_POST['author'];

    echo '<p>' . $author . ' said: "' . $quote .'"</p>';