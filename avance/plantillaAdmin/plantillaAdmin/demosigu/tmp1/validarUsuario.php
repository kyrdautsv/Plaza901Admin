<?php
//iniciar las variables de session
session_start();
ini_set('max_execution_time', 300);
error_reporting(0);
//error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
/*require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';*/
date_default_timezone_set('America/Mazatlan');

include "Conexion.php";
	
$miconexion = new Conexion();
$conexion   = $miconexion->conectar();

$opc = $_REQUEST['opcion'];

if($opc==1){
    $usr = htmlentities($_POST['usr']);
    $pwd = htmlentities($_POST['pwd']);
    $usr= filter_var($usr, 513);
    $pwd= filter_var($pwd,513);
/* por periodo de descanso */
    $autorizado = true;
    /*$personalautorizado = array(1,262,'19190548','admin',90);
    $autorizado = in_array($usr, $personalautorizado);*/
    if($autorizado )
    { 
    $idrol = ValidarUsuario($usr,$pwd);
    if($idrol>0)
        {
            switch ($idrol) 
            {
            case 25:
                echo "Asistencia";
                break;
            case 1000:
                echo "Usuario Invalido";
                break;
            case 1:
                echo "superusuario";
                break;
            case 19:
                echo "soporte";
                break;
            case 20:
                echo "Planeacion";
                break;
            case 16:
                echo "sistemas";
                break;
            case 9:
            case 11:
            case 7:
                echo "servicio escolar";
                break;
            case 3:
                echo "alumno";
                break;
            case 4:
                echo "Director";
                break;
            case 5:
                echo "Idiomas";
                break;
            case 2:
                echo "administrativo";
                break;
            case 8:
                echo "caja";
                break;
            case 18:
                echo "finanzas";
                break;
            case 15:
                echo "servicios estudiantiles";
                break;
            case 14:
                echo "Extension Universitaria";
                break;
            case 13:
                echo "servicio medico";
                break;
            case 21:
                echo "vinculacion";
                break;
            case 24:
                echo "cultura";
                break;
            case 10:
                echo "Información";
                break;
            case 23:
                echo "AUXILIAR DIRECCION";
                break;
            case 999:
                echo "ErrorConexion";
                break;
            case 1001:
                echo "Expirado";
                break;
            default:
                echo "Usuario sin permisos";
            }      
        }else echo "Usuario sin permisos";

    }
    else{
        echo "cerrado";
     }
}
    else
    echo "opción no valida";
 


function ValidarUsuario($usr,$pwd)
{
    $rpta=0;
    try {
        //Creamos un objeto de la clase conexion
        $miconexion = new Conexion();
        //Obtenemos la conexion
        $cn = $miconexion->conectar();
        $usr = mysqli_real_escape_string($cn,$usr);
    if ($miconexion->Error =="")
    {  
        $sql = "SELECT distinct usuarios.usuario,personas.email,personas.tipo, usuarios.password,expiracion, rol.rol,personas.idPersona, personas.clave, personas.nombre, apellidoPaterno,apellidoMaterno,curp,
        concat(personas.nombre,' ',ifnull(apellidoPaterno,''),' ', ifnull(apellidoMaterno,'')) as nombrecompleto, usuariorol.idRol
        FROM rol  INNER JOIN usuarios  ON rol.idRol = usuarios.idRol 
        inner join personas ON personas.clave = usuarios.clavepersona  
        inner join usuariorol on usuarios.clavepersona = usuariorol.clavepersona      
        WHERE  usuarios.usuario = '$usr' AND usuarios.password ='$pwd'
        and usuariorol.idrol not in (2,3,6,12) and usuariorol.activo=1";
            
            //and rol.idrol in (4,6,7,8,9,10,11,12,13,14,15,16)";
        //Ejecutamos la sentencia
        $result= mysqli_query($cn,$sql);			
        
        if (mysqli_error($cn)) {
            //Si hay error 
            mysqli_error($cn);
            
            $rpta = 999;
        } else {
            if( $fila=mysqli_fetch_array($result) )
            {  

                $_SESSION['sitioweb'] ="http://sigu4utsv.com/";
                $_SESSION['rutareq']="http://admision.sigu4utsv.com/fichas/";
                $_SESSION['rutareins']="http://sigu4utsv.com/alumnos/reinscripcion/";
                $_SESSION['rutainscripcion']="http://admisionlocal.sigu4utsv.com/inscripcion/";
                $_SESSION['rutareqreins']="C:\\xampp\\htdocs\\sigu4\\alumnos\\reinscripcion";
                
                $rpta = (int)$fila['idRol'];
                $_SESSION['idPersona']  = $fila['idPersona'];
                $_SESSION['rol']    = $fila['rol'];
                $_SESSION['usuario'] = $fila['usuario'];
                $usuario = $fila['usuario'];
                $_SESSION['idrol'] =  $fila['idRol'];
                $_SESSION['apellidoPaterno'] =  $fila['apellidoPaterno'];
                $_SESSION['nombre'] =  $fila['nombre'];
                $_SESSION['apellidoMaterno'] =  $fila['apellidoMaterno'];
                $_SESSION['curp'] =  $fila['curp'];
                $_SESSION['nombrecompleto'] = $fila['nombrecompleto'];
                $_SESSION['clavepersona'] = $fila['clave'];
                $clavepersona = $fila['clave'];
                $_SESSION['emailpersona'] = $fila['email'];
              /*  $consulta4 = "SELECT  descripcion,idPeriodo,anual,nombrePeriodo, clave FROM periodo where activo = 1";
                $rs4		= mysqli_query($cn,$consulta4) or die(mysqli_error($cn));
                $filas4		= mysqli_fetch_assoc($rs4);*/

             /*   $consulta5 = "SELECT  descripcion,idPeriodo,anual,nombrePeriodo, clave FROM periodo where reinscripcion = 1";
                $rs5		= mysqli_query($cn,$consulta5) or die(mysqli_error($cn));
                $filas5		= mysqli_fetch_assoc($rs5);*/

                $_SESSION['nombrePeriodo'] = "SEPT-DIC";
                $_SESSION['anualPeriodo'] = "2023";
                $_SESSION['clavePeriodo'] = 3232;

                $_SESSION['periodoanual']    = "2023";
                $_SESSION['periodoanualins'] = "2023";
                $_SESSION['claveInscripcion']    = "3241";
                $_SESSION['periodoreincor']="3232";
                

                $sqlper = "SELECT idperiodoficha  FROM periodoficha WHERE activo=1";            
                $rsper= mysqli_query($cn,$sqlper);
                $rowper = mysqli_fetch_array($rsper);
                $idperiodoficha = $rowper['idperiodoficha'];
                $_SESSION['periodoficha'] =$idperiodoficha;

                $_SESSION['clavePeriodoEncuesta']="3233";
                //MODULO DE REINSCRIPCION
                $_SESSION['periodoanterior']="3232";
                $_SESSION['nombrePeriodoReins'] = "SEPT-DIC";
                $_SESSION['anualPeriodoReins'] = "2023";
                $_SESSION['clavePeriodoReins'] = "3233";
                $_SESSION['periodoboleta'] = "3232";

                if($fila['tipo']==2 || $fila['tipo']==1 || $fila['tipo']==0)
                {                    
                    $consulta5 = "SELECT clave, clavedepto FROM personas
                    inner join empleados on empleados.claveper = personas.clave
                    where clave='$clavepersona'";
                    $rs5		= mysqli_query($cn,$consulta5) or die(mysqli_error($cn));
                    $filas5		= mysqli_fetch_assoc($rs5);
                    $_SESSION['clavedepto'] = $filas5["clavedepto"];
                    
                }
                $fecha = date("Y-m-d H:i:s");
                $sqltrace="INSERT INTO bitacoraacceso 
                (usuario, clave, fecha, modulo) 
                VALUES ('$usuario', '$clavepersona', '$fecha', 'login')";
                $result= mysqli_query($cn,$sqltrace);
                
            }
            else
                    $rpta = 1000;
        }
    }
    else
    $rpta = 999;  //error de bd
        //Cerramos la conexion
        mysqli_close($cn);
    } catch (exception $e) {
    
        mysqli_close($cn);			           
        $rpta = 999;
    }
    return $rpta;
}
?>