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
$exits = FALSE;

<<<<<<< HEAD
if(isset($_SESSION['wijnarray'])) {
  
=======
// Check of the de wijnarray session bestaat
if(isset($_SESSION['wijnarray'])) {
    // Loop door de array heen
    foreach($_SESSION['wijnarray'] as $wijnItem) {
        // Delete rij gebasseerd op input
        unset($_SESSION['wijnarray'][$_GET['id']]);
    }
// Aanmaken array als de session niet is geset
>>>>>>> 6e95dc87748e017790539f3d1c1e093214c1cc53
} else {
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
}
<<<<<<< HEAD

$winename = $_GET['wine'];
$rating1 = $_GET['rating1'];
$rating2 = $_GET['rating2'];
$rating3 = $_GET['rating3'];


foreach($wijn as $key => &$value) {
 // if($key == $winename) {
     $exits = TRUE;
     break;
  //}
}

if($exits === FALSE) {
    $newWine = array($winename, $rating1, $rating2, $rating3);
    $wijn[] = $newWine;
}

=======
    // Zet de sessie als variabele
    $wijn = $_SESSION['wijnarray'];
>>>>>>> 6e95dc87748e017790539f3d1c1e093214c1cc53

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
<<<<<<< HEAD

=======
>>>>>>> 6e95dc87748e017790539f3d1c1e093214c1cc53
?>

</body>
</html>
