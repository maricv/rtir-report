document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("validateGC").addEventListener("submit", verificar);
})
function verificar(evento){
    // evento.preventDefault();
    var nombre= document.getElementById("nombres").value
    var apellidos=document.getElementById("apellidos").value
    var email=document.getElementById("correo").value
    var celular= document.getElementById("celular").value
    var unidad= document.getElementById("unidad").value
    var asunto=document.getElementById("asunto").value
    var mensaje=document.getElementById("mensaje").value
    var response = grecaptcha.getResponse();

    if(nombre=="" || apellidos=="" || email==""||unidad=="" || asunto=="" || mensaje==""){
        AlertaError()
    }else{
        if(celular!=""){
            if( parseInt(celular)>=60000000 && parseInt(celular)<=79999999){
                // document.formulario.submit()
                   if(response.length == 0)
                    {
                        AlertaError3();
                        evento.preventDefault();
                        return false;
                    }else{
                        AlertaSuccess();
                    }
            }else{
                AlertaError2();
                evento.preventDefault();
                return false;
            }
        }else{
            if(response.length == 0)
                    {
                        AlertaError3();
                        evento.preventDefault();
                        return false;
                    }else{
                        AlertaSuccess();
                    }
            // document.formulario.submit()
            // AlertaSuccess();
        }
    }
}
function AlertaSuccess(){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Registro Exitoso',
        text:"Se registro correctamente el incidente.",
        showConfirmButton: false,
        timer: 1500
      })
}
function AlertaError(){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Datos Incompletos',
        showConfirmButton: false,
        timer: 1300
      })
}
function AlertaError2(){
    Swal.fire({
        position: 'top-end',
        icon: 'question',
        title: 'Número de celular no valido',
        showConfirmButton: false,
        timer: 1500
      })
}
function AlertaError3(){
    Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'Completa el CAPTCHA',
        text: "Verifica que eres humano...!",
        showConfirmButton: false,
        timer: 1500
      })
}

