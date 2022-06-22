<?php

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];



    $suma =  $valorA + $valorB;
    $resta =  $valorA - $valorB;
    $multiplicacion =  $valorA * $valorB;
    $division =  $valorA / $valorB;
    echo "<br>" . $suma;
    echo "<br>" . $resta;
    echo "<br>" . $multiplicacion;
    echo "<br>" . $division;




    if ($valorA == $valorB) {
        echo "<br> El valor de A es igual al de B";


        if ($valorA == 4) {
            echo "<br> El valor es 4";
        }

        if ($valorA == 5) {
            echo "<br> El valor es 5";
        }
    }

    if (($valorA == $valorB) && ($valorA == 4)) {
        echo "<br>----El valor de A es igual al de B <br> El valor es 4";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones arimeticaas</title>
</head>

<body>
    <form action="ejercicio11.php" method="post">

        valor A:
        <input type="text" name="valorA" id="">
        <br>
        valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="calcular">

    </form>
</body>

</html>