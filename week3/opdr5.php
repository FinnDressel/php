<?php

for($i = 1; $i <= 10; $i++){
    if($i % 2 == 0){
        echo "<img scr='week3/IMG/".$i.".jpg' style='border:2px solid red'>";
    } elseif ($i % 2 == 1){
        echo "<img scr='week3/IMG/".$i.".jpg' style='border:2px solid green'>";
    }
}
