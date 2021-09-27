<?php
include_once '../model/vendedor.php';
$id = $_POST['id'];
$llamar_db = new vendedor();
$a = $llamar_db::EditarDatos($id);
