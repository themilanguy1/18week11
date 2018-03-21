<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
    <input type="radio" name="keuze" value="Chardonnai">1 <!-- Value is op index -->
    <input type="radio" name="keuze" value="Bordeaux">2
    <input type="radio" name="keuze" value="Chateau migraine">3

    <input type="submit" value="submit">

</form>

<?php

session_start();

// Check session
if(isset($_SESSION['test'])) { // array isset
    foreach($_SESSION['test'] as $item) {
        unset($_SESSION['test'][$_GET['keuze']]);
    }
} else { // array is NOT set
    
    $_SESSION['test'] = array('Chardonnai' => 1, 'Bordeaux' => 2, 'Chateau migraine' => 3);
}

?>

<?php 

$keuze = $_GET['keuze'];

// Print table
foreach($_SESSION['test'] as $item => $subitem) {
    echo $item;
}

?>
</body>
</html>