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

    <table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Cargo</th>
        <th>fecha entrada</th>

    </tr>

    </thead>
    <tbody>
    <?php  foreach ($datos::ver() as  $value): 

       echo  "<tr>
            <td>".$value['nombre']."</td>
       </tr>";  
        ?>  
<?php endforeach  ?>

    </tbody>

    </table>



</body>

</html>