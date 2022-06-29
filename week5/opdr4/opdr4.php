<?php
function check($email,$wachtwoord) {
$check = 0;
$gegevens = array(
    array("piet@worldonline.nl", "doetje123"),
    array("klaas@carpets.nl", "snoepje777"),
    array("truushendriks@wegweg.nl", "arkiearkie201"));

for($i = 0; $i < 3; $i++){
    if($email == $gegevens[$i][0] && $wachtwoord == $gegevens[$i][1]){
        $check = 1;
    }
}
if($check == 1){
    echo "Welkom";
    return true;
} else{
    echo "Sorry geen toegang";
    return false;
}
}

check($_POST["email"], $_POST["Wachtwoord"]);