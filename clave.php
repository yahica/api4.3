<?php 
require ('conexion.php'); ///// Requerimos para hacer conexion a la base de datos.
require('datosFactura.php'); ///// Requerimos para los datos de la factura
$url = 'http://localhost/factura/api.php';///Ruta del API
date_default_timezone_set('America/Panama');
 
$fecha =date('Y-m-d\TH:i:s-06:00');




$queryUsuario = $db->query("SELECT * from users where idUser='5'"); /////Aqui filtran ustedes por usuario al gusto
$rowCountUsuarios = $queryUsuario->num_rows;
$apiUsuario = $queryUsuario->fetch_assoc();

////// Datos de usuarios del api de cr libre, tabla users//////////////
$usuarioApi=$apiUsuario["userName"];
$claveApi=$apiUsuario["pwd"];
$tipoConexion = $apiUsuario["tipoConexion"];
$haciendaUsuario=$apiUsuario["usuarioHacienda"];
$claveHacienda = $apiUsuario["passwordHacienda"];




///////Generamos la clave del documento //////////////
function generarCodigo($longitud) {
 $key = '';
 $pattern = '123456789';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
 
 
$codigoSec= generarCodigo(8); // genera un código aleatorio de 8 caracteres de longitud.

$queryNConsecutivo = $db->query("SELECT * from consecutivos where tipoDocumento='FE' order by consecutivo DESC"); ///// tabla de consecutivos que se agreso 
$rowCountNConsecutivo =$queryNConsecutivo->num_rows;
$apiConsec = $queryNConsecutivo->fetch_assoc();

$nuevoNumero = $apiConsec['consecutivo'] + 1;


$clave = curl_init();
curl_setopt($clave, CURLOPT_URL, "localhost/factura/api.php?w=clave&r=clave&tipoDocumento=FE&tipoCedula=$emisor_tipoCedula&cedula=$emisor_cedula&codigoPais=$emisor_codigoPais&consecutivo=$nuevoNumero&situacion=normal&codigoSeguridad=$codigoSec");
curl_setopt($clave, CURLOPT_HEADER, 0);
curl_setopt($clave, CURLOPT_POST, 1);
curl_setopt($clave, CURLOPT_RETURNTRANSFER,true);
$respuestaClave = curl_exec($clave);
$ClaveDoc = substr($respuestaClave,18,50);/// Con esto solo capturamos la clave sin los caracteres sobrantes
$ConsecutivoH=substr($respuestaClave,85,20);
curl_close($clave);

?>