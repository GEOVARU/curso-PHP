<?php

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if (($valorA != $valorB)&&($valorA > $valorB)) {
        echo "El valor de A es DIFERENTE que el valor de B Y Tambien es mayor";
    } else {
        echo "El valor de B es mayor que el valor de A";
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
    <form action="ejercicio10.php" method="post">

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