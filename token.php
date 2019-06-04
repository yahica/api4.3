<?php 
require ('conexion.php'); ///// Requerimos para hacer conexion a la base de datos.
require('datosFactura.php'); ///// Requerimos para los datos de la factura
$url = 'http://localhost/factura/api.php';///Ruta del API
date_default_timezone_set('America/Panama');
 
$fecha =date('Y-m-d\TH:i:s-06:00');




$queryUsuario = $db->query("SELECT * from users where idUser='5'");/////Aqui filtran ustedes por usuario al gusto
$rowCountUsuarios = $queryUsuario->num_rows;
$apiUsuario = $queryUsuario->fetch_assoc();

////// Datos de usuarios registrados para usar el API //////////////
$usuarioApi=$apiUsuario["userName"];
$claveApi=$apiUsuario["pwd"];
$tipoConexion = $apiUsuario["tipoConexion"];
$haciendaUsuario=$apiUsuario["usuarioHacienda"];
$claveHacienda = $apiUsuario["passwordHacienda"];




///Generamos un nuevo Token ///////////////
$token = curl_init();
curl_setopt($token, CURLOPT_URL, "localhost/factura/api.php?w=token&r=gettoken&grant_type=password&client_id=$tipoConexion&username=$haciendaUsuario&password=$claveHacienda");
curl_setopt($token, CURLOPT_HEADER, 0);
curl_setopt($token, CURLOPT_POST, 1);
curl_setopt($token, CURLOPT_RETURNTRANSFER,true);
$respuestaToken = curl_exec($token);

$stringToken= substr($respuestaToken,25,1379); /// Con esto solo capturamos el access_token





curl_close($token);
?>