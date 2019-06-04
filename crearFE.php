<?php

/* Autor: Johnny Fernandez
Este archivo me simplifica el proceso de elaboracion del XML, firma y envio a hacienda para la version 4.3
Simplemente utilice el API de hacienda pero la parte de cear el XML lo adapte al api pero sin usar el genXML.php
que viene en el api ya que no tiene compatibilidad con la version 4.3

*/

require('token.php');
require('clave.php');






/////// Captura de datos del formulario de FE Mobile       /////////////////////////









//////////////////////////////////





require('../../../../xampp/htdocs/mobile/datosFactura.php'); ////Creamos el XML que con datosFactura.php cargamos los datos para despues firmar
$xmlString = '<?xml version="1.0" encoding="utf-8"?>
<FacturaElectronica xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="https://cdn.comprobanteselectronicos.go.cr/xml-schemas/v4.3/facturaElectronica">
    <Clave>'.$ClaveDoc.'</Clave>
    <CodigoActividad>'.$emisor_codigoActividad.'</CodigoActividad>
    <NumeroConsecutivo>'.$ConsecutivoH.'</NumeroConsecutivo>
    <FechaEmision>2019-05-08T10:49:16</FechaEmision>
    <Emisor>
        <Nombre>'.$emisor_nombre.'</Nombre>
        <Identificacion>
            <Tipo>'.$emisor_tipoCedula.'</Tipo>
            <Numero>'.$emisor_cedula.'</Numero>
        </Identificacion>
        <NombreComercial>'.$emisor_razonSocial.'</NombreComercial>
        <Ubicacion>
            <Provincia>'.$emisor_provincia.'</Provincia>
            <Canton>'.$emisor_canton.'</Canton>
            <Distrito>'.$emisor_distrito.'</Distrito>
            <Barrio>'.$emisor_barrio.'</Barrio>
            <OtrasSenas>'.$emisor_direccion.'</OtrasSenas>
        </Ubicacion>
        <Telefono>
            <CodigoPais>'.$emisor_codigoPais.'</CodigoPais>
            <NumTelefono>'.$emisor_telefono.'</NumTelefono>
        </Telefono>
        <CorreoElectronico>'.$emisor_correo.'</CorreoElectronico>
    </Emisor>
    <Receptor>
        <Nombre>'.$receptor_nombre.'</Nombre>
        <Identificacion>
            <Tipo>'.$receptor_tipoCedula.'</Tipo>
            <Numero>'.$receptor_cedula.'</Numero>
        </Identificacion>
        <Ubicacion>
            <Provincia>'.$receptor_provincia.'</Provincia>
            <Canton>'.$receptor_canton.'</Canton>
            <Distrito>'.$receptor_distrito.'</Distrito>
            <Barrio>'.$receptor_barrio.'</Barrio>
            <OtrasSenas>'.$receptor_direccion.'</OtrasSenas>
        </Ubicacion>
        <CorreoElectronico>'.$receptor_correo.'</CorreoElectronico>
    </Receptor>
    <CondicionVenta>01</CondicionVenta>
    <PlazoCredito>1</PlazoCredito>
    <MedioPago>01</MedioPago>
    <DetalleServicio>
        <LineaDetalle>
            <NumeroLinea>1</NumeroLinea>
            <CodigoComercial>
                <Tipo>01</Tipo>
                <Codigo>2001</Codigo>
            </CodigoComercial>
            <Cantidad>3.00</Cantidad>
            <UnidadMedida>Unid</UnidadMedida>
            <UnidadMedidaComercial />
            <Detalle> AF 5572</Detalle>
            <PrecioUnitario>3716.80000</PrecioUnitario>
            <MontoTotal>11150.40000</MontoTotal>
            <SubTotal>11150.40000</SubTotal>
            <BaseImponible>11150.40000</BaseImponible>
            <Impuesto>
                <Codigo>01</Codigo>
                <CodigoTarifa>03</CodigoTarifa>
                <Tarifa>13.00000</Tarifa>
                <FactorIVA>0.13</FactorIVA>
                <Monto>1449.55200</Monto>
                <Exoneracion>
                    <TipoDocumento>01</TipoDocumento>
                    <NumeroDocumento>OC-01</NumeroDocumento>
                    <NombreInstitucion>Municipalidad</NombreInstitucion>
                    <FechaEmision>2019-05-08T10:49:16</FechaEmision>
                    <PorcentajeExoneracion>100</PorcentajeExoneracion>
                    <MontoExoneracion>1449.55200</MontoExoneracion>
                </Exoneracion>
            </Impuesto>
            <ImpuestoNeto>0.00</ImpuestoNeto>
            <MontoTotalLinea>11150.40000</MontoTotalLinea>
        </LineaDetalle>
        <LineaDetalle>
            <NumeroLinea>2</NumeroLinea>
            <CodigoComercial>
                <Tipo>02</Tipo>
                <Codigo>1002</Codigo>
            </CodigoComercial>
            <Cantidad>2.00</Cantidad>
            <UnidadMedida>Unid</UnidadMedida>
            <UnidadMedidaComercial />
            <Detalle>20 W50 CASTROL</Detalle>
            <PrecioUnitario>3097.40000</PrecioUnitario>
            <MontoTotal>6194.80000</MontoTotal>
            <Descuento>
                <MontoDescuento>309.74000</MontoDescuento>
                <NaturalezaDescuento>Prueba descuento</NaturalezaDescuento>
            </Descuento>
            <SubTotal>5885.06000</SubTotal>
            <BaseImponible>5885.06000</BaseImponible>
            <Impuesto>
                <Codigo>01</Codigo>
                <CodigoTarifa>03</CodigoTarifa>
                <Tarifa>13.00000</Tarifa>
                <FactorIVA>0.13</FactorIVA>
                <Monto>765.06</Monto>
            </Impuesto>
            <ImpuestoNeto>765.06</ImpuestoNeto>
            <MontoTotalLinea>6650.11780</MontoTotalLinea>
        </LineaDetalle>
        <LineaDetalle>
            <NumeroLinea>3</NumeroLinea>
            <CodigoComercial>
                <Tipo>01</Tipo>
                <Codigo>1001</Codigo>
            </CodigoComercial>
            <Cantidad>1.00</Cantidad>
            <UnidadMedida>Sp</UnidadMedida>
            <UnidadMedidaComercial />
            <Detalle>Servicio</Detalle>
            <PrecioUnitario>3200.00000</PrecioUnitario>
            <MontoTotal>3200.00000</MontoTotal>
            <SubTotal>3200.00000</SubTotal>
            <BaseImponible>3200.00000</BaseImponible>
            <Impuesto>
                <Codigo>01</Codigo>
                <CodigoTarifa>03</CodigoTarifa>
                <Tarifa>13.00000</Tarifa>
                <FactorIVA>0.13</FactorIVA>
                <Monto>416.00</Monto>
            </Impuesto>
            <ImpuestoNeto>416.00</ImpuestoNeto>
            <MontoTotalLinea>3616.00000</MontoTotalLinea>
        </LineaDetalle>
    </DetalleServicio>
    <ResumenFactura>
        <CodigoTipoMoneda>
            <CodigoMoneda>CRC</CodigoMoneda>
            <TipoCambio>1.00</TipoCambio>
        </CodigoTipoMoneda>
        <TotalServGravados>3200.00000</TotalServGravados>
        <TotalServExentos>0.00000</TotalServExentos>
        <TotalServExonerado>0.00000</TotalServExonerado>
        <TotalMercanciasGravadas>6194.80000</TotalMercanciasGravadas>
        <TotalMercanciasExentas>11150.40000</TotalMercanciasExentas>
        <TotalMercExonerada>11150.40000</TotalMercExonerada>
        <TotalGravado>9394.80000</TotalGravado>
        <TotalExento>11150.40000</TotalExento>
        <TotalExonerado>11150.40000</TotalExonerado>
        <TotalVenta>31695.60000</TotalVenta>
        <TotalDescuentos>309.74000</TotalDescuentos>
        <TotalVentaNeta>31385.86000</TotalVentaNeta>
        <TotalImpuesto>1181.06000</TotalImpuesto>
        <TotalIVADevuelto>0.00000</TotalIVADevuelto>
        <TotalOtrosCargos>0.00000</TotalOtrosCargos>
        <TotalComprobante>32566.92000</TotalComprobante>
    </ResumenFactura>
</FacturaElectronica>
';
$base64 = base64_encode($xmlString); //Guardamos en una variable el XML en base64
 

$dom = new DomDocument();
$dom->preseveWhiteSpace = FALSE;
$dom->loadXML($xmlString);






/////////////Buscamos la llave cryptografica en la tabla files del api CRLibre para firmar el documento ///////////////
$queryLlave = $db->query("SELECT * from files where idUser='5'"); ///// Filtran al gusto suyo
$rowCountLlave = $queryLlave->num_rows;
$llaveCryptografica = $queryLlave->fetch_assoc();
$codigoLlaveCrypto = $llaveCryptografica["downloadCode"];
$pinLlaveCrypto = $llaveCryptografica["pin"];




//////Firmamos el XML /////////
 require(dirname(__FILE__) . 'firmador.php'); /// Cargamos el archivo que firma el xml, libreia de gran colaborador Enzo Jimenez.

use Hacienda\Firmador;

$pfx    = $llaveCryptografica["ruta"]; // Ruta del archivo de la llave criptográfica (*.p12)
$pin    = $pinLlaveCrypto; // PIN de 4 dígitos de la llave criptográfica
$xml    = $xmlString; // String XML ó Ruta del archivo XML (comprobante electrónico)
//$ruta   = 'xmls/facturaFirmada.xml'; // Ruta del nuevo arhivo XML cuando se desea guardar en disco

// Nuevo firmador
$firmador = new Firmador();

// Se firma XML y se recibe un string resultado en Base64
$base64Firma = $firmador->firmarXml($pfx, $pin, $xml, $firmador::TO_BASE64_STRING);
 

// Se firma XML y se recibe un string resultado en Xml
$xml_stringFirma = $firmador->firmarXml($pfx, $pin, $xml, $firmador::TO_XML_STRING);
 

// Se firma XML, se guarda en disco duro ($ruta) y se recibe el número de bytes del archivo guardado. En caso de error se recibe FALSE
// $archivo = $firmador->firmarXml($pfx, $pin, $xml, $firmador::TO_XML_FILE, $ruta);
 
 
 
 
 //////Enviamos la factura a Hacienda /////////
$envio = curl_init($url);
$jsonDataEnvio = array(
    'w'                  => 'send',
	'r'                  => 'json',
	'token'             =>  $stringToken,
	'clave'              => $ClaveDoc,
	'fecha'             =>  $fecha,
	'emi_tipoIdentificacion'  =>  $emisor_tipoCedula,
	'emi_numeroIdentificacion' => $emisor_cedula,
	'recp_tipoIdentificacion' => $receptor_tipoCedula,
	'recp_numeroIdentificacion' => $receptor_cedula,
	'client_id' =>$tipoConexion,
	'comprobanteXml' => $base64Firma
	
);
 

$jsonDataEncodedEnvio = json_encode($jsonDataEnvio);
curl_setopt($envio, CURLOPT_POST, 1);
curl_setopt($envio, CURLOPT_HEADER, 0);
curl_setopt($envio, CURLOPT_RETURNTRANSFER,true);
curl_setopt($envio, CURLOPT_POSTFIELDS, $jsonDataEncodedEnvio);
curl_setopt($envio, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$resultadoEnvio = curl_exec($envio);

 $queryFacturar = $db->query("insert into documentos (tipoDocumento,idEmisor,idReceptor,clave,xmlBase64,xmlFirmado,estatus) value ('FE','$emisor_id','$receptor_id','$ClaveDoc','$base64','$base64Firma','Procesando')"); ////Aqui  guardamoe en una tabla el documento enviado.
 
 $queryRegConsecutivo = $db->query("INSERT INTO consecutivos (tipoDocumento,consecutivo)value('FE','$nuevoNumero')"); // Por si deseamos guardarlo el consecutivo
 
?>
