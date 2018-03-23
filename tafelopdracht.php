<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tafel</title>
</head>
<body>
    <form>
        <input type="number" min="1" max="100000" name="nr">
        <br><br>
        <input type="submit">
    </form>


    <?php
        if(isset($_GET['nr'])) {
            $nr = $_GET['nr'];
        }
            
        function tafelreken($nr) { 
            for($i=1;$i<=10;$i++) {
                $tafeloutput = $i * $nr;
                echo $nr." X ".$i." = ".$tafeloutput."<br>";
            }
        }
        
        
        if(isset($nr)) {
            tafelreken($nr); // call the function
        } else {
            echo "<br>Vul aub een cijfer in om de tafel ervan te berekenen.";   
        }
        

    ?> 
    
</body>
</html>


