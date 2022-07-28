<?php
// IGNORA ESTA PARTE ERROR MIO XD
$develop=["turno1","192.168.1.107:8080"];
$production=["diego","34.125.59.98:8080"];

//USER NAME DEL USUARIO Q CREARTE ESE SERVIRA COMO UN BRIDGE
function cuname(){
    return base64_encode("Adminc5i");
}

//CONTRASEÑA DEL USUARIO  
function cpwd(){
    return base64_encode("c5ipass");
}
//IP DEL SERVIDOR PUBLICO
function cip(){
    return base64_encode("http://172.20.40.94:8080");
}