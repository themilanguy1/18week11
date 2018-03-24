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
<h3>Wijn toevoegen</h3>
    <form method="get">
        <label>Naam</label>
        <input type="text" name="wine" required><br>

        <label>Rating 1:</label>
        <input type="text" name="rating1"><br>

        <label>Rating 2:</label>
        <input type="text" name="rating2"><br>

        <label>Rating 3:</label>
        <input type="text" name="rating3"><br>

        <input type="submit" value="submit">
    </form>
<?php
/*
https://stackoverflow.com/questions/1960730/add-values-to-an-associative-array-in-php
*/
session_start();
$exits = FALSE;

if(isset($_SESSION['wijnarray'])) {
  
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

    $wijn = $_SESSION['wijnarray'];
}

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


        echo "<table>";
        echo "<th> </th> <th>2010</th> <th>2011</th> <th>2012</th>";
        foreach ($wijn as $key => $value) {
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
