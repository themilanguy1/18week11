<?php
$wijn = array(
    "Chardonnai"=>array(
        "2010"=>"3",
<<<<<<< HEAD
        "2010"=>"3",
        "2011"=>"5",
        array("2012","4")
        ), 
    "Bordeaux"=>array(
        array("2010","5"),
        array("2011","1"),
        array("2012","3")
        ), 
    "Chateau migraine"=>array(
        array("2010","1"),
        array("2011","5"),
        array("2012","2")
        )
    );

foreach($age as $x => $x_value) {
    echo $x." ";
    echo $x_value[0][0]." ".$x_value[0][1]."<br>";
    echo $x_value[1][0]." ".$x_value[1][1]."<br>";
    echo $x_value[2][0]." ".$x_value[2][1]."<br>";
}
=======
        "2011"=>"5",
        "2012"=>"4"
        ), 
    "Bordeaux"=>array(
        "2010"=>"5",
        "2011"=>"1",
        "2012"=>"3"
        ), 
    "Chateau migraine"=>array(
        "2010"=>"1",
        "2011"=>"5",
        "2012"=>"2"
        )
    );

    /* 
        http://php.net/manual/en/function.key.php

        De loop is niet helemaal dynamisch aangezien de jaartallen 
        op dit moment nog hardcoded zijn.
    */
    foreach ($wijn as $key => $value) {
        echo $key . "<br>";
        echo "2010: " . $value['2010'] . "<br>";
        echo "2011: " . $value['2011'] . "<br>";
        echo "2012: " . $value['2012'] . "<br>";
    }

// foreach($age as $x => $x_value) {
//     echo $x." ";
//     echo $x_value[0][0]." ".$x_value[0][1]."<br>";
// }
//test
>>>>>>> 47c39c0a66f9cbbe83aa9839d333bee3c5d2e779

?>