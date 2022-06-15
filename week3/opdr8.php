<?php
$kappersagenda = array();
$afspraak = array();
$tijd = getdate();
print("de volgende momenten zijn nog beschikbaar:<ul>");

foreach ($kappersagenda as $afspraak => $tijd){
    if($afspraak == ""){
        print ("<li>".$tijd."</li>");
    }
}
print("</ul>");