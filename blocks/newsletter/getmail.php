<?php

/**
 * Parametros para obtener la información de la base de datos
 */

date_default_timezone_set('America/Mexico_City');
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "archertroy_contacto";
$tablename = "contacto";

$handle = mysql_connect($servername, $username, $password);
$found = mysql_select_db($databasename, $handle);

if ($found) {
	$query = "SELECT * FROM `". $databasename ."`.`". $tablename ."` WHERE `newsletter` = 'true' ORDER BY `fecha` DESC";
	$resultado = mysql_query($query);
	while($field = mysql_fetch_array($resultado)){
		$html .= $field["correo"] . ", ";
	}
}
$html = trim($html, ", ");
echo $html;

?>