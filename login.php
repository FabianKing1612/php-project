<?php

$email = $_POST["email"];
$passwort = $_POST["passwort"];

$users = file("users.txt");
foreach ($users AS $line) {
    $user_info = explode(";", $line);
    if ($user_info[0] == $email AND $user_info[1] == $passwort) {
        echo "Hallo " . $user_info[2];
    } else {
        echo "Falsches Passwort oder E-Mail";
    }
}
