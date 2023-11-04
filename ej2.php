<?php
    $country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
    $capitals=[];
    $countries=explode(",",$country);

    $i=0;
    foreach($countries as $value){
        $capitals[$i]['country']=$value;
        $i++;
    }
    var_dump($capitals)
    
   

?>