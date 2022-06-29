<?php

$check = 0;
$gegevens = array(
    array("piet@worldonline.nl", "doetje123"),
    array("klaas@carpets.nl", "snoepje777"),
    array("truushendriks@wegweg.nl", "arkiearkie201"));

$email = $_POST["email"];
$wachtwoord = $_POST["Wachtwoord"];

for($i = 0; $i < 3; $i++){
    if($email == $gegevens[$i][0] && $wachtwoord == $gegevens[$i][1]){
        $check = 1;
    }
}
if($check == 1){
    echo "Welkom";
} else{
    echo "Sorry geen toegang";
}

