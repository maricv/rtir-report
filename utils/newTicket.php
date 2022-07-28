<?php
require_once 'RequestTracker.php';
require_once 'encrypData.php';
function validarUrl(&$url) {
    $cabeceras = @get_headers($url);
    if ($cabeceras === false) return false; // Cuando no funciona el servidor
    foreach($cabeceras as $header) {
        // Una $url es correcta cuando el codigo 301 o 302 esto redirecciona a 200:
        if(preg_match("/^Location: (http.+)$/",$header,$m)) $url=$m[1];
        if(preg_match("/^HTTP.+\s(\d\d\d)\s/",$header,$m)) $code=$m[1];
    }
    if($code==200) return true; // $code 200 == OK
    //Para cualquier otro caso retorna False
    else return false;
}

function nuevoTicket($grado, $nombres, $apellidos, $correo, $celular, $direccion, $asunto, $mensaje){

    $solicitante = "adminc5i@gmail.com";
    $rt_queue = "General";
    $url = base64_decode(cip());
    if(validarUrl($url)){
//        echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">"."Su solicitud se registro con exito.".
//            "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>".
//            "</div>";
        $rt = new RequestTracker($url, base64_decode(cuname()), base64_decode(cpwd()));
        $content = [
            'Queue'=>$rt_queue,
            'Requestor'=>$correo,
            'Subject'=>strtoupper($asunto),
            'Text'=>$mensaje,
            // CAMPOS PERSONALIZADOS 
            'CF-Grado'=> strtoupper($grado),
            // 'CF-Nombres'=> strtoupper($nombres),
            // 'CF-Apellidos'=> strtoupper($apellidos),
            // 'CF-Correo Institucional'=>$correo,
            // 'CF-Celular'=>$celular,
            // 'CF-Dirección/Unidad afectada'=>strtoupper($direccion),
        ];
        $rt->createTicket($content);
    }else{
        echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">"."Sus datos no fueron enviados, debido a que el servidor se encuentra inactivo".
            "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>".
            "</div>";
    }
}
