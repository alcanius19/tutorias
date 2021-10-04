<?php
include_once '../model/vendedor.php';

class verDatosId
{


    static public function ver($id)
    {
        $llamar_db = new vendedor();
        $a = $llamar_db::VerDatosbyId($id);
        return $a;
    }
}
$id = $_GET['id'];
$llamar_clase = new verDatosId();
$datos  = $llamar_clase->ver($id);
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
    <form method="POST" action="modificarDatos.php">

        <?php foreach ($datos as  $value) : ?>
            <?php echo "<input name='nombre' value=" . $value['nombre'] . ">" ?></td>
            <?php echo "<input name='cargo' value=" . $value['cargo'] . ">" ?></td>
            <?php echo "<input type='date' name='fecha_ingreso' value=" . $value['fecha_ingreso'] . ">" ?></td>
            <?php echo "<input type='hidden' name='id' value=" . $value['id'] . ">" ?></td>
            <?php echo "<button>Modificar</button>" ?>
        <?php endforeach; ?>

    </form>
</body>

</html>