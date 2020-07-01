<?php
    echo "<link rel='stylesheet' type='text/css' href='main.css'>";

    if (isset($_POST["name"])) {$name = $_POST["name"];} else {$name = "Anonymous";};
    if (isset($_POST["track"])) {$track = $_POST["track"];} else {$track = "Wanderer";};
    if (isset($_POST["email"])) {$email = $_POST["email"];} else {$email = "you@yourdomain.com";};
    if (isset($_POST["slack-id"])) {$slack_id = $_POST["slack-id"];} else {$slack_id = "@slackbot";};
    if (isset($_POST["position"])) {$position = $_POST["position"];} else {$position = "Idler";};


    $start = "<body>" . "<h2>Welcome <span class='label inline'>$name</span>. This is your dashboard</h2>" . "<div>" . "<ul>";
    echo $start;

    foreach ($_POST as $input_key => $input_value) {
        if (isset($input_value)) {
            $key = "<span class='label inline'>$input_key</span>";
            $value = "<span class='label value'>$input_value</span>";
            echo "<li>$key: $value</li>";
        }
    }
    $end = "</ul>" . "</div>" . "</body>";
    echo $end;
?>