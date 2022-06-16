<?php
if(gradenConverter(25)){

}

echo "<br>";
echo "<br>";

if(delen(535)){
    echo "Is deelbaar door 3";
} elseif (!delen(5)){
    echo "Is niet deelbaar";
}

echo "<br>";
echo "<br>";

$woord = "Zon";
echo Reverse($woord);

function gradenConverter($celsius){
    $fahrenheit = NULL;

    $fahrenheit = (float)(($celsius * 9 / 5) + 32);
    printf($celsius. " Celsius = ". $fahrenheit. " Fahrenheit");
}

function delen($getal)
{
    if ($getal % 3 == 0) {
        return true;
    }else{
        return false;
    }
}

function Reverse($woord){
    return strrev($woord);
}

