<?php
$zwemclubs = array("De spartelkuikens" =>25, "De waterbuffels" =>32, "Plonsmderin" =>11, "Bommetje" =>23);

foreach($zwemclubs as $naam => $ledenaantal){
    echo $naam. ": ". $ledenaantal . " ";
    if(round($ledenaantal / 5,0 )> 1){
       for($i = 0; $i < floor($ledenaantal / 5); $i++){
           echo "<img src='IMG/zwembad.jpg' style = 'max-height: 25px; max-width: 25px'>";
       }
    }
    echo "<br>";
}
