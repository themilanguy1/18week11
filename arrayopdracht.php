<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, td {
        border: 1px solid black;
    }
    th {
        min-width: 40px;
        border-bottom: 1px solid black;
    }
    p {
        margin: 0;
        padding: 0;
    }
    a {
        text-decoration: none;
        color: salmon;
    }
    </style>
</head>
<body>

<?php
session_start();

$_SESSION['wijnarray'] = array(
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

    $wijn = $_SESSION['wijnarray'];

    /* 
        http://php.net/manual/en/function.key.php

        De loop is niet helemaal dynamisch aangezien de jaartallen 
        op dit moment nog hardcoded zijn.
    */
    echo "<table>";
    echo "<th> </th> <th>2010</th> <th>2011</th> <th>2012</th>";
    foreach ($wijn as $key => $value) {
        echo "<tr>";
        echo "<td><a href='arrayopdracht.php?id=$key'>$key</a></td>";
        echo "<td>".$wijn[$key]['2010']."</td>";
        // echo "<td>".$wijn[$_GET[$key]]['2010']."</td>";
        echo "<td>".$wijn[$key]['2011']."</td>";
        echo "<td>".$wijn[$key]['2012']."</td>";
        echo "</tr>";
    }

    echo "</table>";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        // if($id == "Bordeaux") {
            $wijn[$id]['2010'] = null;
           // unset($wijn[$id]['2010']);
            echo "<td>".$wijn[$id]['2010']."</td>";

        }

        echo "<table>";
        echo "<th> </th> <th>2010</th> <th>2011</th> <th>2012</th>";
        foreach ($wijn as $key => $value) {
            echo "<tr>";
            echo "<td><a href='arrayopdracht.php?id=$key'>$key</a></td>";
            echo "<td>".$wijn[$key]['2010']."</td>";
            // echo "<td>".$wijn[$_GET[$key]]['2010']."</td>";
            echo "<td>".$wijn[$key]['2011']."</td>";
            echo "<td>".$wijn[$key]['2012']."</td>";
            echo "</tr>";
        }
    
        echo "</table>";
    //     }
    //     else if($id == "Chardonnai") {
    //         echo $wijn['Chardonnai']['2010'];
    //         $wijn['Chardonnai']['2010'] = null;
    //         echo $wijn['Chardonnai']['2010'];
    //     }
    //     else if($id == "Chateau migraine") {
    //         echo $wijn['Chateau migraine']['2010'];
    //         $wijn['Chateau migraine']['2010'] = null;
    //         echo $wijn['Chateau migraine']['2010'];
    //     } else {
    //         echo "Klik een wijn om te verwijdern.";
    //     }
    // }

?>

</body>
</html>
