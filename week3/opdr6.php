<?php
$prijs = 10;
$leeftijd = 2;

if($leeftijd <= 65 && $leeftijd > 12){
    $prijs;
} elseif($leeftijd > 65){
    $prijs = 5;
} elseif($leeftijd <= 12 && $leeftijd >= 3){
    $prijs = 5;
}elseif ($leeftijd < 3){
    $prijs = 0;
} echo $prijs;

