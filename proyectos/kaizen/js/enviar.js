$(document).ready(function(){
    
    $("#frm_contacto").bind("submit",function(){
       
        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            success:function(respuesta){
                if(respuesta == "ok"){
                $("#alerta").removeClass("collapse").removeClass("alert-danger").removeClass("alert-success").addClass("alert-success");
                $("#div_form").addClass("collapse");
                $(".respuesta").html("Enviado.");
                $(".mensaje-alerta").html("<br>El mensaje ha sido enviado correctamente, a la brevedad le llegará un mensaje de confirmación a su correo electrónico. <br> (En caso de no encontrarlo verifique la casilla de correo electrónico no deseado.)");
            }else{
            
                $("#alerta").removeClass("collapse").removeClass("alert-danger").removeClass("alert-success").addClass("alert-danger");
                $(".respuesta").html("Error al enviar.");
                $(".mensaje-alerta").html("<br>No se pudo enviar tu mensaje, complete todos los campos e intentalo de nuevo.");
        }
        },
            error:function(){
            
                $("#alerta").removeClass("collapse").removeClass("alert-danger").removeClass("alert-success").addClass("alert-danger");
                $(".respuesta").html("Error al enviar.");
                $(".mensaje-alerta").html("<br>No se pudo enviar tu mensaje, intentalo de nuevo en unos instantes.");
            
            }
        });
        
        return false;
    });
    
});