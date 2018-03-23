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

// Check of the de wijnarray session bestaat
if(isset($_SESSION['wijnarray'])) {
    // Loop door de array heen
    foreach($_SESSION['wijnarray'] as $wijnItem) {
        // Delete rij gebasseerd op input
        unset($_SESSION['wijnarray'][$_GET['id']]);
    }
// Aanmaken array als de session niet is geset
} else {
$_SESSION['wijnarray'] = array( // array bestaat NIET
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
}
    // Zet de sessie als variabele
    $wijn = $_SESSION['wijnarray'];

        // Print table 
        echo "<table>";
        echo "<th> </th> <th>2010</th> <th>2011</th> <th>2012</th>";
        foreach ($wijn as  $key => $value) {
            echo "<tr>";
            echo "<td><a href='arrayopdracht.php?id=$key'>$key</a></td>";
            echo "<td>".$wijn[$key]['2010']."</td>";
            echo "<td>".$wijn[$key]['2011']."</td>";
            echo "<td>".$wijn[$key]['2012']."</td>";
            echo "</tr>";
        }
        echo "</table>";
?>

</body>
</html>
