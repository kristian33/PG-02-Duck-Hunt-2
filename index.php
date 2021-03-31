<?php
include_once 'function.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dead {
            transform: rotate(
            180deg
        );
        }
    </style>
    <script>

function kill(id) {
    //alert("Auvajs! Kvák řekla kachna s číslem: " + id);
    var duck = document.getElementById(id);
            duck.classList.add('dead');
}


</script>
</head>
<body>

<?php
   
define('DUCKS_COUNT', 50);

for ($i=0; $i < DUCKS_COUNT; $i++) { 
    
    $size = rand(20,150);
    $positionLeft = rand(0,95);
    $positionTop = rand(0,95);
    $color = rand_color();

    drawDuck($size,$positionLeft,$positionTop, $color, "duck-" . $i); 
}
?>
</body>
</html>