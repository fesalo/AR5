<?php
    $city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"];
    $country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];

    $i=0;
    foreach($country as $value){
        $capitals[$i]['country']=$value;
        $i++;
    }
    $i=0;
    foreach($city as $value2){
        $capitals[$i]['city']=$value2;
        $i++;
    }
    var_dump($capitals)
    


?>