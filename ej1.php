<?php
    $city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
    $capitals=[
        /* ['city'=>"Tokyo"],
        ['city'=>"Mexico City"],
        ['city'=>"New York City"],
        ['city'=>"Mumbai"],
        ['city'=>"Seoul"],
        ['city'=>"Shangai"],
        ['city'=>"Lagos"],
        ['city'=>"Buenos Aires"],
        ['city'=>"Cairo"],
        ['city'=>"London"], */
    ];
    $cities=explode(",",$city);

    $i=0;
    foreach($cities as $value){
        $capitals[$i]['city']=$value;
        $i++;
    }
    var_dump($capitals)
    
   

?>