<?php

include_once '../controller/verDatos.php';
$datos = new verDatos();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <select name="" id="">
        <?php foreach ($datos::ver() as $value) {
            echo "<option>" . $value['nombre'] . "</option>";
        } ?>


    </select>

    <select name="" id="">
        <?php foreach ($datos::ver() as $value) {

            echo "<option>" . $value['cargo'] . "</option>";

        } ?>


    </select>


</body>

</html>