<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="UNIVERSIDAD TECNOLOGICA DEL SURESTE DE VERACRUZ">
  <meta name="author" content="KYRDA">
  <link rel="icon" href="imagen/utsv32.png" />
  <title>SIGU-UTSV</title>

  <link href="bootstrap/css/sbadmin.min.css" rel="stylesheet">
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/all.css">
</head>
<style>
  body {
	background: url("imagen/utsvbk.jpg") no-repeat center center fixed;
	background-size: cover;
  opacity: .8;
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	margin: 0;
	color: #666;
	/*margin-bottom: 40px;*/
}
</style>
<script>
$(document).ready( function() {
  $('#formulario').submit(function(e) {
       e.preventDefault();  
    var btnEnviar = $("#btnEnviar");
    $.ajax({
    type: 'POST',
    url: 'validarUsuario.php?opcion=1',
    data: $('#formulario').serialize(),
    beforeSend: function(){
      //alert('beforeSend');
    //Esta función se ejecuta durante el envió de la petición al servidor.                
      btnEnviar.text("Enviando..."); //Para button 
    // btnEnviar.val("Enviando..."); // Para input de tipo button
      btnEnviar.attr("disabled","disabled");
    },
    complete:function(data){
    //alert(data.responseText);
      // Se ejecuta al termino de la petición
      btnEnviar.text("Entrar");
      btnEnviar.removeAttr("disabled");
    },
    success: function(respuesta) {
      var user = document.getElementById('iduser');
      //alert(respuesta);
      switch (respuesta) {
      case 'alumno':
        location.href='alumnos.php';
        break;
      case 'AUXILIAR DIRECCION':
        location.href='portal.php?user=' + user.value;
        break;
      case 'Director':
        location.href='portal.php?user=' + user.value;
        break;
      case 'servicio escolar':
        location.href='portal.php?user=' + user.value;
        break;
      case 'Asistencia':
        location.href='asistencia/asistencia.php?user=' + user.value;
        break;
      case 'Información':
        location.href='portal.php?user=' + user.value;
        break;
      case 'servicios estudiantiles':
        location.href='servicioestudiantil/validarEncuesta.php?user=' + user.value;
        break;
      case 'finanzas':
        location.href='finanzas/portalFinanzas.php?user=' + user.value;
        break;
      case 'Idiomas':
        location.href='portal.php?user=' + user.value;
        break;
      case 'caja':
        location.href='finanzas/portalFinanzas.php?user=' + user.value;
        break;
      case 'servicio medico':
        location.href='portal.php?user=' + user.value;
        break;
      case 'Extension Universitaria':
        location.href='portal.php?user=' + user.value;
        break;
      case 'Planeacion':
        location.href='planeacion/rptresumenfichasxgenero.php?user=' + user.value;
        break;
      case 'vinculacion':
        location.href='vinculacion/portalvinculacion.php?user=' + user.value;
        break;
      case 'cultura':
        location.href='culturadeporte/portalCulturaDeporte.php?user=' + user.value;
        break;
      case 'sistemas':
        location.href='sistemas/portalSistemas.php?user=' + user.value;
        break;
      case 'soporte':
        location.href='portal.php?user=' + user.value;
        break;
      case 'superusuario':
        location.href='portal.php?user=' + user.value;
        break;
      case 'Expirado':
        location.href='cambiarpassword.php?user=' + user.value;
        break;
      case 'Usuario Invalido':
        document.getElementById('msgAlerta').style.display='block';        
        document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>Datos incorrectos</b></span>";
        
        break;
      
      case 'ErrorConexion':    
        document.getElementById('msgAlerta').style.display='block';        
        document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>Error al conectar con la BD</b></span>";
        break;
      case 'cerrado':    
        document.getElementById('msgAlerta').style.display='block';        
        document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>La plataforma esta en mantenimiento por periodo vacacional. <br> Gracias por su comprensión.</b></span>";
      break;
      default:
        document.getElementById('msgAlerta').style.display='block';        
        document.getElementById("msgtexto").innerHTML = "<span style='color:black'><b>Respuesta invalida</b></span>";
    }
      
    },
    error: function(data){
    // Se ejecuta si la peticón ha sido erronea
    alert("Error de inicio de sesión");
    }
  });
    
  });      
});
function mostrarPassword2(){
   
   var cambio = document.getElementById("newpassword");
   //alert(cambio.value);
   if(cambio.type == "password"){
       cambio.type = "text";
       $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
   }else{
       cambio.type = "password";
       $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
   }

}
</script>
<body >

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image" >
                
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                <div class="text-center" style="font-size:16pt;color:#278A49;font-weight: 500;">
                    SISTEMA  DE INFORMACIÓN Y GESTIÓN UNIVERSITARIA
                    </div>
                       <div class="text-center" style="font-size:16pt;color:BLACK;font-weight: 500;">
                    - ADMINISTRATIVOS -
                    
                  </div>
                  <hr>
                  <form class="user" name="formulario" id="formulario">
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span style="font-size: 18px; color: black;" class="input-group-text"> <i class="fa fa-user"></i> </span>
                      </div>
                      <input type="text" class="form-control form-control-user2" id="iduser" name = "usr" required
                      aria-describedby="emailHelp" placeholder="Clave">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span style="font-size: 16px; color: black;" class="input-group-text"> 
                            <i class="fa fa-lock"></i>&nbsp;</span>
                        </div>
                        <input name="pwd" id="newpassword" class="form-control" placeholder="Password" 
                        type="password"    required>
                        <!-- pattern="^(?=(?:.*[A-Z]))(?=(?:.*[a-z]))\S{8}$"  -->
                          <div class="input-group-append">
                            <button id="show_password2" style="background-color: black;" class="btn btn-primary" type="button" onclick="mostrarPassword2()"> <span class="fa fa-eye-slash icon"></span> </button>
                          </div>
                          </div>
                  <div class="input-group-append">  
                    <button type="submit" class="btn btn-primary btn-user btn-block" 
                     name="btnEnviar" id="btnEnviar"  style="background-color:#278A49;font-size:14pt" >Entrar</button>                                      
                     </div>
                  </form>
                  <hr>
                  
                  <div class="text-center" style="font-size:12pt;color:black">
                    Acceso Exclusivo a Administrativos <br>
                    <a href="recuperarcuentautsv.php" 
                    style="font-size:14pt;color:#278A49"><b>Recupera tu cuenta, aquí!</b></a>
                  </div>
                  <div class="text-center" style="font-size:12pt;color:black">
  <note>¿Necesitas ayuda? escribe a:
 <a href="mailto:sigu4@utsv.edu.mx?subject=Atención a Administrativos SIGU4-UTSV">Soporte Técnico</a></note> 
  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <div id="msgAlerta" class="modal p-5" style="display:none;">
  <div class="row no-gutters fixed-top">
  <div class="col-lg-6 col-md-12 m-auto" style="border-width: 2px;border-radius:1px;border-style: solid;
  border-color: green;background-color:white">
    <button onclick="document.getElementById('msgAlerta').style.display='none'" style="font-size:30px;" type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="True" ><i style="color:green" class='fa fa-times'></i>
            </span>
				</button>
        <div class="text-center" style="padding:30px;">
        <i class="fa fa-exclamation-circle" style='font-size:50px;color:#F8B336' aria-hidden="true"></i>
</br>&nbsp </br>
        <p id="msgtexto" style="font-size:20px" class="mb-0 font-weight-light"><b class="mr-1">Aviso!</b>Correo no registrado, use su correo institucional.</p>
				</div>
        </div>
  </div>
</div>  

</body>

</html>
