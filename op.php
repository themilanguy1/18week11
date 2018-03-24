<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wijn Opdracht</title>

</head>
<body>
<h2>Wijn opdracht</h2>

<?php

// Print multidimensional associative array
function printAssocArray($name) {
/* NOTE: De jaren moeten nog uniek worden gemaakt. */
    foreach($name as $key => $value) {
    // outter loop
        echo $key . "<br>";
        foreach($value as $year => $rating) {
            $value = array_unique($value);
            echo $year .  ": ";
            echo $value[$year] . " ";
            
        }
        echo "<br>";
  
    }
    
}

$wijnen = array(
    "Chardonnai"=>array(
        "2010"=>"3",
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

    printAssocArray($wijnen);

?>
</body>
</html>