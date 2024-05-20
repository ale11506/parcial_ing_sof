<?php 

include_once '../templates/header.php'; ?>

<h1 class="text-center">FORMULARIO CONTROL DE COMIDA </h1>
<div class="row justify-content-center">
    <form action="/controladores/productos/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6"action="/TAREA_INSERT_SELECT/controladores/clientes/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="cont_nombre_servido">NOMBRE Y APELLIDO</label>
                <input type="text" name="cont_nombre_servido" id="cont_nombre_servido" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cont_menu">MENU QUE SIRVIO</label>
                <input type="text" name="cont_menu" id="cont_menu" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for=" cont_fecha">FECHA EN QUE SIRVIO</label>
                <input type="date" name=" cont_fecha" id=" cont_fecha" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for=" cont_hora">HORA EN QUE SIRVIO</label>
                <input type="text" name=" cont_hora" id=" cont_hora" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cont_tiempo_comida">TIEMPO DE COMIDA QUE SIRVIO</label>
                <input type="text" name="cont_tiempo_comida" id="cont_tiempo_comida" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cont_nombre_Servidor">SIRVIO</label>
                <input type="text" name="cont_nombre_Servidor" id="cont_nombre_Servidor" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-success w-100">GUARDAR</button>
            </div>
        </div>

    </form>
</div>
<?php include_once '../templates/footer.php'; ?>
