<?php

require '../../modelos/index.php';

// VALIDAR INFORMACION
$_POST['cont_nombre'] = htmlspecialchars($_POST['cont_nombre']);
$_POST['cont_menu'] = htmlspecialchars($_POST['cont_menu']);
$_POST['cont_fecha'] = htmlspecialchars($_POST['cont_fecha']);
$_POST['cont_hora'] = htmlspecialchars($_POST['cont_hora']);
$_POST['cont_comida'] = htmlspecialchars($_POST['cont_tiempo_comida']);
$_POST['cont_servidor'] = htmlspecialchars($_POST['cont_servidor']);

if ($_POST['cont_nombre'] == '' || $_POST['cont_menu'] == '' || $_POST['cont_fecha'] == '' || $_POST['cont_hora'] ==''|| $_POST['per_tiempo_comida'] =='' || $_POST['cont_servidor'== '']  ) {
    // ALERTA PARA VALIDAR DATOS
    $resultado = [
        'mensaje' => 'DEBE VALIDAR LOS DATOS',
        'codigo' => 2
    ];
} else {
    try {
        // REALIZAR CONSULTA
        $persona = new persona($_POST);
        $guardar = $persona->guardar();
        $resultado = [
            'mensaje' => 'PERSONA INSERTADA CORRECTAMENTE',
            'codigo' => 1
        ];
    } catch (PDOException $pe) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR INSERTANDO A LA BD',
            'detalle' => $pe->getMessage(),
            'codigo' => 0
        ];
    } catch (Exception $e) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
            'detalle' => $e->getMessage(),
            'codigo' => 0
        ];
    }
}


$alertas = ['danger', 'success', 'warning'];


include_once '../../templates/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-lg-6 alert alert-<?= $alertas[$resultado['codigo']] ?>" role="alert">
        <?= $resultado['mensaje'] ?>
        <?= $resultado['detalle'] ?>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <a href="../../vistas/personas.php" class="btn btn-primary w-100">Volver al formulario</a>
    </div>
</div>


<?php include_once '../../templates/footer.php'; ?>