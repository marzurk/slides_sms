<?php 
/* Hace la conexion a la base de datos*/
$conexion = new mysqli('192.168.10.38','tesalia','proyecto','solar_metric');
/* Creo los 3 arreglos con su primer elemento*/
$now = (new \Datetime())->format('Y-m-d');
$categorias = array('MEDICION');
$voltaje = array('VOLTAJE');
$humedad = array('HUMEDAD');
$temperatura = array('TEMPERATURA');
 
/* Creo la primer consulta que obtendrá los nombres de las categorias
$consulta = "SELECT DISTINCT(categoria) FROM tblventas WHERE mes = 'enero' OR mes = 'febrero' ORDER BY categoria";
/* Se ejecuta la consulta*/
$consulta = "SELECT hora FROM medicion WHERE fecha = '".$now."'";

$result = $conexion->query($consulta);

/*Recorro el resultado y guardo los nombres de las categorías en el arreglo*/
while ($fila = $result->fetch_array()) {
    $categorias[] = $fila['hora'];
}
 
/* Creo la segunda consulta que obtiene los totales de ventas */
$consulta = "SELECT voltaje, temp, humedad FROM medicion WHERE fecha = '".$now."'";
/* Se ejecuta la consulta*/
$result = $conexion->query($consulta);
/*Recorro el resultado y guardo los nombres de las categorías en el arreglo correspondiente*/
while($fila = $result->fetch_array()){
    $voltaje[] = (double)$fila['voltaje'];
    $temperatura[] = (double)$fila['temp'];
    $humedad[] = (double)$fila['humedad'];
}
 
/* Preparo la respuesta que se va a regresar como JSON*/
echo json_encode( array($categorias,$voltaje,$humedad, $temp));

?>