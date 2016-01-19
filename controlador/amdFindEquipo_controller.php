<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once '../modelo/Maquina_Modelo.php';
require_once '../modelo/validar_usuario.php';
require_once ('../modelo/raiz_directorio_principal.php');
require_once('../modelo/Table.php');

validar_user_amd();




if (!isset($_POST['id'])) {
    $id_equipo = '';
} else {
    $id_equipo = ($_POST['id']);
}

if (!isset($_POST['equipo'])) {
    $nombre = '';
} else {
    $nombre = ($_POST['equipo']);
}


if (!isset($_POST['descripcion'])) {
    $descripcion = '';
} else {
    $descripcion = ($_POST['descripcion']);
}





$maquina = new Maquina();


$maquina->setIdEmpresa($_SESSION['k_empresa']);

$id_equipo = $maquina->crearConsultalike($id_equipo);


$consulta = $maquina->consultarEquipoParametros($id_equipo, $nombre, $descripcion);
$field = $maquina->field_count - 1;

$tabla = new Table();
$tabla->crearArraySimple($consulta, $field);




if (($consulta->num_rows) >= 1) {


    require_once '../vista/amd_MostrarEquipo.php';
    exit();
} else {


    echo('<script>alert("No existe Coincidencia con los parametros de busquedas introducidos")</script>');
    raiz_amd();
    exit();
}
?>






