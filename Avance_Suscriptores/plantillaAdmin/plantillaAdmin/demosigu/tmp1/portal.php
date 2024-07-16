<?php
//Iniciar una sesion de PHP
	/* establecer la caducidad de la caché a 30 minutos */
	session_cache_expire(60);
	// server should keep session data for AT LEAST 1 hour
	session_start();

    //error_reporting(0);
    error_reporting(1);
	setlocale(LC_ALL,"es_MX");    
	date_default_timezone_set('America/Mazatlan');
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); 
   // error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />    
    <link href="bootstrap/css/utsv.css" rel="stylesheet" />   
    <link rel="stylesheet" href="../bootstrap/css/fontawesome.v5.all.css">

    <title>UTSV</title>
    <link rel="icon" href="imagen/utsv32.png" />
    <script src="bootstrap/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 
  </head>
  <body>

<?php include("menuportal.php");
 $idrol=  strtolower($_SESSION['idrol']) ;
?>
<div class="container2" style="margin-left:10px; margin-top: 10px;">
<div  class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 row-cols-xl-5">
<?php           
if($idrol==4 || $idrol==1 || $idrol==5 || $idrol==23)
{
?>
<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>EVALUACIÓN DOCENTE</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;">
            <?php echo  $_SESSION['nombrePeriodo']." ".$_SESSION['anualPeriodo']; ?></h5-->
            <p class="card-text">DESEMPEÑO DOCENTE</p>
        </div>
        <div class="card-footer">
        <?php           
        if($idrol==4 || $idrol==1 || $idrol==23)
        {
       
      echo "<a href='evaldok/docenteseval.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i class='fas fa-arrow-circle-right' style='color: black;'></i></a>";
        }
        if($idrol==5){
        echo "<a href='evaldok/docentesingleseval.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i class='fas fa-arrow-circle-right' style='color: black;'></i></a>";
        } ?>
       
        </div>
    </div>
</div>
<?php 
}   
if($idrol==7 || $idrol==1 || $idrol==10 || $idrol==11 || $idrol==9
 || $idrol==8 || $idrol==14 || $idrol==15 || $idrol==18
   || $idrol==19 || $idrol==11 || $idrol==4 || $idrol==13)
{  ?>
<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>INSCRIPCIONES 2024</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;">GENERACIÓN 2022</h5-->
            <p class="card-text">FICHAS E INSCRIPCIÓN</p>
        </div>
        <div class="card-footer">
        <?php          
        if($idrol==7 || $idrol==1 || $idrol==11 || $idrol==9 || $idrol==13
        || $idrol==10 || $idrol==14 || $idrol==19 || $idrol==4 || $idrol==4)
        {       
			$moduloinsc = true;
			//$rolespermitidos = array(7,1,11,9,13,10,14,19,4);
			//$moduloinsc = in_array($idrol, $rolespermitidos);
			if($moduloinsc )
				echo "<a href='inscripcion/estatusaspirantes.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
			else 
				echo "<a href='#' style='color: black;' class='small-box-footer'> &nbsp Cerrado &nbsp <i style='color: red;' class='fas fa-arrow-circle-right'></i></a>";
        }
            ?>
       
        </div>
    </div>
</div>
<?php
}
    if($idrol==4 || $idrol==7 || $idrol==1 || $idrol==8 || $idrol==9 ||
     $idrol==11 || $idrol==18 || $idrol==20 || $idrol==14)
    {
?>
<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>REINSCRIPCIONES</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;">REINSCRIPCION <?php echo $_SESSION['nombrePeriodoReins']." ".$_SESSION['anualPeriodoReins']; ?></h5-->
            <p class="card-text">ALUMNOS <?php echo $_SESSION['nombrePeriodoReins']; ?> </p>
        </div>
        <div class="card-footer">
            <!--  -->
            <?php  
        if($idrol==14 || $idrol==20 )
        {
            echo "<a href='inscripcion/rptfichageneral.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }         
        if($idrol==777 || $idrol==111 )
        {
            echo "<a href='reinscripcion/pendientesreinscripcion.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }
        if($idrol==8 ||  $idrol==18 )
        {
            echo "<a href='reinscripcion/estatusdocreq.php?tramite=reins&docreq=pagocua&title=Validar%20Pagos&num=1' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }
        if( $idrol==9 || $idrol==11)
        {
            echo "<a href='reinscripcion/estatusdocreq.php?tramite=reins&docreq=solrein&title=Validar%20Solicitud' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }
        if($idrol==4 || $idrol==7 || $idrol==1 )
        {
            echo "<a href='reinscripcion/EstatusReinscritos.php' class='small-box-footer' style='color: black;'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        } ?>
    </div>
    </div>
</div>
<?php 
}
if($idrol==4 || $idrol==1 || $idrol==7 || $idrol==9 || $idrol==11 || 
$idrol==21 || $idrol==20 || $idrol==16 || $idrol==23)
{
?>
<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>SERVICIOS ESCOLARES</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;">MODULOS DE GESTIÓN ESCOLAR</h5-->
            <p class="card-text">GESTIÓN ESCOLAR</p>
        </div>
        <div class="card-footer">
            <!--  -->
        <?php           
        if($idrol==7 || $idrol==1 || $idrol==4 || $idrol==9 || $idrol==11 || $idrol==23)
        {
            echo "<a href='ctrlescolar/ce_matricula.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }
        if($idrol==21 || $idrol==20)
        {
            echo "<a href='ctrlescolar/rptegresadosxcarrera.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }
        if($idrol==16)
        {
            echo "<a href='ctrlescolar/gestorcorreos.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }
         ?>
    </div>
    </div>
</div>
<?php
   }
   if($idrol==13 || $idrol==1 || $idrol==14)
    {
?>
<!-- inicio modulo sv-->
<div class="col mb-2" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>SERVICIO MEDICO</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;"></h5-->
            <p class="card-text">SEGURO SOCIAL</p>
        </div>
        <div class="card-footer">
            
            <?php           
        if($idrol==13 || $idrol==1)
        {
            echo "<a href='serviciomedico/pendientesnssalumnos.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }else{
            echo "<a href='#' class='small-box-footer' style='color: black;'> &nbsp Ver &nbsp <i class='fas fa-arrow-circle-right' style='color: black;'></i></a>";
        } ?>
    </div>
    </div>
</div>
<?php
} 
?>

<!-- fin modulo sv-->
<?php
   if($idrol==15 || $idrol==1 || $idrol==20)
        {
?>
<!-- inicio modulo servicio estudiantil-->
<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>SERVICIOS ESTUDIANTILES</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;"></h5-->
            <p class="card-text">SERVICIOS A ALUMNOS</p>
        </div>
        <div class="card-footer">
            
            <?php           
        if($idrol==15 || $idrol==1 || $idrol==20)
        {
            echo "<a href='servicioestudiantil/validarEncuesta.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }else{

            if($idrol==14 || $idrol==1 || $idrol==15)
        {
            echo "<a href='servicioestudiantil/EstudioReporte.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }else{
            echo "<a href='#' class='small-box-footer' style='color: black;'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }
            
        } ?>


      
    </div>
    </div>
</div>
<?php
} 
?>
<!-- fin modulo servicio estudiantil-->
<!-- inicio modulo datos maestros-->
<?php 
if($idrol==7 || $idrol==1 || $idrol==19)
        {
?>
<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>DATOS MAESTROS</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;"></h5-->
            <p class="card-text">CONFIGURACIÓN</p>
        </div>
        <div class="card-footer">
            
            <?php           
        if($idrol==1 || $idrol==7)
        {
            echo "<a href='datosMaestros/portalDatos.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }else{
            echo "<a href='#' class='small-box-footer' style='color: black;'> &nbsp Proximamente &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        } ?>
    </div>
    </div>
</div>
<?php 
}
?>
<!-- fin modulo datos maestros-->
<!-- inicio modulo servicio estudiantil-->
<?php
if($idrol==1 || $idrol==20)
{
?>

<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>PLANEACIÓN</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;"></h5-->
            <p class="card-text">ANÁLISIS Y REPORTES DE INFORMACIÓN</p>
        </div>
        <div class="card-footer">
            
            <?php           
        if($idrol==1 || $idrol==20)
        {
            echo "<a href='planeacion/rptresumenfichasxgenero.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }else{
            echo "<a href='#' class='small-box-footer' style='color: black;'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        } ?>
    </div>
    </div>
</div>
<?php
} 
if($idrol==19 || $idrol==1)
{
?>
<!-- fin modulo planeación-->
<!-- inicio modulo soporte-->
<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>SOPORTE TÉCNICO</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;"></h5-->
            <p class="card-text">ATENCION A USUARIOS Y SOPORTE TECNICO</p>
        </div>
        <div class="card-footer">
            
            <?php           
        if($idrol==19 || $idrol==1)
        {
            echo "<a href='soporte/infoalumnos.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }else{
            echo "<a href='#' class='small-box-footer' style='color: black;'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        } ?>
    </div>
    </div>
</div>
<?php
} 
if($idrol==18 || $idrol==1)
        {
?>
<!-- fin modulo soporte-->
<!-- inicio modulo finanzas-->
<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>FINANZAS</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;"></h5-->
            <p class="card-text">PAGOS INSCRIPCION Y PARCIALIDADES</p>
        </div>
        <div class="card-footer">
            
            <?php           
        if($idrol==18 || $idrol==1)
        {
            echo "<a href='finanzas/portalfinanzas.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }else{
            echo "<a href='#' class='small-box-footer' style='color: black;'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        } ?>
    </div>
    </div>
</div>
<?php 
}
?>

<?php 
if( $idrol==7 || $idrol==9 || $idrol==11 )
{
?>
<div class="col mb-4" style="margin: 2px;">
    <div class="card text-black">
        <div class="card-header bg-info" style="font-size:12pt;color:white"><b>REINCORPORACIÓN</b></div>
        <div class="card-body">
            <!--h5 class="card-title" style="font-size:12pt;">MODULOS DE GESTIÓN ESCOLAR</h5-->
            <p class="card-text"> REINCORPORACIÓN</p>
        </div>
        <div class="card-footer">
            
            <?php           
        if( $idrol==7 || $idrol==9 || $idrol==11 )
        {
            echo "<a href='/utsv/reincorporacion/exalumnossinmatricula.php' style='color: black;' class='small-box-footer'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        }else{
            echo "<a href='#' class='small-box-footer' style='color: black;'> &nbsp Ver &nbsp <i style='color: black;' class='fas fa-arrow-circle-right'></i></a>";
        } ?>
    </div>
    </div>
    </div>
  


    <?php 
}
?>
</div>
</div>
<?php include("pieportal.php");?>
  <?php
  //mysqli_close($cn); 
?> 

</body>
</html>
