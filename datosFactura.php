<?php
 
require ('conexion.php');


///// Buscamos datos del Emisor de una tabla nombre emisor agregada //////
$queryEmisor = $db->query("SELECT * FROM emisores where idEmisor='1' ");

$rowCountEmisores = $queryEmisor->num_rows;
$Emisor = $queryEmisor->fetch_assoc();
$emisor_id=$Emisor['idEmisor'];
$emisor_nombre = $Emisor['nombre'];
$emisor_cedula = $Emisor['cedula'];
$emisor_tipoCedula = $Emisor['tipoCedula'];
$emisor_razonSocial = $Emisor['razonSocial'];
$emisor_direccion = $Emisor['direccion'];
$emisor_correo = $Emisor['correo'];
$emisor_telefono = $Emisor['telefono'];
$emisor_fax = $Emisor['fax'];
$emisor_provincia = $Emisor['provincia'];
$emisor_canton = $Emisor['canton'];
$emisor_distrito = $Emisor['distrito'];
$emisor_barrio = $Emisor['barrio'];
$emisor_codigoPais = $Emisor['codigoPais'];


///// Buscamos datos del las actividades del Emisor //////
$queryEmisorActividad = $db->query("SELECT * FROM emisoresactividades where idEmisor='1' and idActividadEmisor='2' ");

$rowCountEmisoresActividad = $queryEmisorActividad->num_rows;
$EmisorActividad = $queryEmisorActividad->fetch_assoc();

$emisor_codigoActividad = $EmisorActividad['codigoActividad'];
$emisor_Actividad = $EmisorActividad['nombreActividad'];





//////// Buscamos el receptor  //////

$queryReceptor = $db->query("SELECT * FROM receptores where idReceptor='1' ");
$rowCountReceptores = $queryReceptor->num_rows;
$Receptor = $queryReceptor->fetch_assoc();

$receptor_id = $Receptor['idReceptor'];
$receptor_nombre = $Receptor['nombre'];
$receptor_cedula = $Receptor['cedula'];
$receptor_tipoCedula = $Receptor['tipoCedula'];
$receptor_razonSocial = $Receptor['razonSocial'];
$receptor_direccion = $Receptor['direccion'];
$receptor_correo = $Receptor['correo'];
$receptor_telefono = $Receptor['telefono'];
$receptor_provincia = $Receptor['provincia'];
$receptor_canton = $Receptor['canton'];
$receptor_distrito = $Receptor['distrito'];
$receptor_barrio = $Receptor['barrio'];
$receptor_codigoPais = $Receptor['codigoPais'];
$receptor_fax = $Receptor['fax'];


?>