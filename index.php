<?php
require "./utils/newTicket.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $grado     = $_POST['grado'];
    $nombre     = $_POST['nombres'];
    $apellido   = $_POST['apellidos'];
    $correo     = $_POST['correo'];
    $celular    = $_POST['celular'];
    $direccion  = $_POST['unidad'];
    $asunto     = $_POST['asunto'];
    $mensaje    = $_POST['mensaje'];
    //            $fileName   =$_FILES['evidencia']['name'];
    //            $tempPath   =$_FILES['evidencia']['tmp_name'];
    //            $fileSize   =$_FILES['evidencia']['size'];
    //            $fileType   =$_FILES['evidencia']['type'];
    if ($direccion == 1) {
        $dir = "...";
    } elseif ($direccion == 2) {
        $dir = "...";
    } elseif ($direccion == 3) {
        $dir = "...";
    } elseif ($direccion == 4) {
        $dir = "...";
    } elseif ($direccion == 5) {
        $dir = "...";
    } elseif ($direccion == 6) {
        $dir = "...";
    } elseif ($direccion == 7) {
        $dir = "...";
    } elseif ($direccion == 8) {
        $dir = "...";
    } elseif ($direccion == 0) {
        $dir = "...";
    } elseif ($direccion == 9) {
        $dir = "...";
    } elseif ($direccion == 10) {
        $dir = "...";
    }
    nuevoTicket($grado, $nombre, $apellido, $correo, $celular, $dir, $asunto, $mensaje);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.min.css">
    <script src="./js/main.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>RTIR</title>
</head>

<body>
    <section class="hero">
        <div class="container-fluid fondo">
            <div class="row alto align-items-center justify-content-center text-center text-light">
                <div class="col-md-8">
                    <img src="assets/img/logo.png"></img>
                    <h3 class="display-5"><strong>C5I-RTIR</strong></h3>
                    <p class="lead">En este sitio podras registrar incidentes de Seguridad de la Información</p>
                    <hr class="bg-light">
                </div>
            </div>
        </div>
    </section>
    <div class="cuerpo">
        <div class="contenido">
            <div class="card">
                <div class="card-header text-center">
                    <strong>
                        FORMULARIO DE REPORTE DE INCIDENTES
                    </strong>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <form class="formulario" name="formulario" id="validateGC" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                <h6>
                                        <strong>
                                            Grado<span style="color: red">*</span>
                                        </strong>
                                    </h6>
                                    <input class="input-field" id="grado" name="grado" type="text" placeholder="Ingrese su grado" autocomplete="off" style="text-transform:uppercase" required />
                                </div>
                                <div class="col-md-6">
                                    <h6>
                                    <h6>
                                        <strong>
                                            Nombres<span style="color: red">*</span>
                                        </strong>
                                    </h6>
                                    <input class="input-field" id="nombres" name="nombres" type="text" placeholder="Ingrese su nombre" autocomplete="off" style="text-transform:uppercase" required />
                                </div>
                                <div class="col-md-6">
                                    <h6>
                                        <strong>
                                            Apellidos<span style="color: red">*</span>
                                        </strong>
                                    </h6>
                                    <input class="input-field" id="apellidos" name="apellidos" type="text" placeholder="Ingrese su apellido paterno y materno" autocomplete="off" style="text-transform:uppercase" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col-md-6">
                                    <h6>

                                        <strong>
                                            Correo<span style="color: red">*</span>
                                        </strong>
                                    </h6>
                                    <input id="correo" name="correo" type="email" class="validate" placeholder="Ingrese su correo institucional" autocomplete="off" required />
                                    <span class="helper-text" data-error="Correo Invalido" data-success="">ejemplo@gmail.com</span>

                                </div>
                                <div class="input-field col-md-6">
                                    <h6>
                                        <strong>
                                            Celular
                                        </strong>
                                    </h6>
                                    <input class="input-field" type="number" class="validate" id="celular" name="celular" placeholder="Ingrese su número de contacto" autocomplete="off" data-length="8" />
                                    <span class="helper-text" data-error="Numero Invalido" data-success="">65432187</span>
                                </div>
                            </div>
                            <div class="mx-3">

                                <select id="unidad" name="unidad" class="form-select" aria-label="Default select example" required="true">
                                    <option disabled selected value="">-- Unidad/Reparticion --</option>
                                    <option value="0">DEPARTAMENTO I-PERSONAL</option>
                                    <option value="1">DEPARTAMENTO II-INTELIGENCIA</option>
                                    <option value="2">DEPARTAMENTO III-OPERACIONES</option></option>
                                    <option value="3">DEPARTAMENTO IV-LOGISTICA</option>
                                    <option value="4">DEPARTAMENTO V-AC/OC.PARTICIPACION EN EL DESARROLLO</option>
                                    <option value="5">DEPARTAMENTO VI-EDUCACION</option>
                                    <option value="6">DEPARTAMENTO VII-PRODUCCION Y ECOLOGIA </option>
                                    <option value="7">DEPARTAMENTO VIII-DOCTRINA</option>
                                    <option value="8">DIRECCION GENERAL ADMINISTRATIVO Y FINANCIERO DEL EJERCITO</option>
                                    <option value="9">DIRECCION GENERAL DE PLANIFICACION ESTRATEGICA DEL EJERCITO</option>
                                    <option value="10">DIRECCION GENERAL DE JURIDICA DEL EJERCITO </option>
                                </select>

                                </br>

                                <h6><strong>Asunto<span style="color: red">*</span></strong></h6>
                                <input class="input-field" type="text" id="asunto" name="asunto" placeholder="Indique de que se trata el incidente" autocomplete="off" style="text-transform:uppercase" required />
                                <h6>
                                    <strong>
                                        Mensaje<span style="color: red">*</span>
                                    </strong>
                                </h6>
                                <textarea class="materialize-textarea" id="mensaje" name="mensaje" placeholder="Por favor describa brevemente los detalles del incidente" required style="height: 50px; text-transform:uppercase;"></textarea>
                                </br>
                                <!--                            <h6><strong>Subir Evidencia<span style="color: red">*</span></strong></h6>-->
                                <!--                            <input type="file" name="evidencia" required>-->
                            </div>
                            <br>
                            <div class="g-recaptcha" id="rcaptcha" data-sitekey="6LdfB1ocAAAAALBc0K1w-RymD9dsNmxjpTfYFRHx" data-callback="enabledSubmit"></div>
                            <br>
                            <input type="submit" class="form-control btn-primary" value="REPORTAR">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>