<?php
$age = array(
    "Chardonnai"=>array(
        array("2010","3"),
        array("2011","5"),
        array("2011","4")
        ), 
    "Bordeaux"=>array(
        array("2010","5"),
        array("2011","1"),
        array("2011","3")
        ), 
    "Chateau migraine"=>array(
        array("2010","1"),
        array("2011","5"),
        array("2011","2")
        )
    );

foreach($age as $x => $x_value) {
    echo $x." ";
    echo $x_value[1]." ".$x_value[0]."<br>";
}

?>