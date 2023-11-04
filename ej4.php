<?php
    $city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
    $country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
    $city=explode(",",$city);
    $country=explode(",",$country);
    var_dump($city);
    echo "<br>";
    var_dump($country);

?>