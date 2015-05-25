<?php
session_start();
/**
 * Parametros para obtener la información de la base de datos
 */
$_SESSION["last"] = $_SESSION["init"] + 5;
date_default_timezone_set('America/Mexico_City');
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "archertroy_contacto";
$tablename = "contacto";
$handle = mysql_connect($servername, $username, $password);
$found = mysql_select_db($databasename, $handle);

if ($found) {
	$query = "SELECT * FROM `". $databasename ."`.`". $tablename ."` WHERE 1 ORDER BY `fecha` DESC LIMIT ".$_SESSION["init"].", ".$_SESSION["last"]." ";
	$resultado = mysql_query($query);
	while($field = mysql_fetch_array($resultado)){
		$newsletter = "No";
		if($field["newsletter"] == "true"){
			$newsletter = "Si";
		}
		$confirm = "noconfirmado";
		if($field["confirmado"] == 1){
			$confirm = "confirmado";
		}
		$fecha = substr($field["fecha"], 0 , 10);
		$fechaDummy = explode("-", $fecha);
		$fecha = $fechaDummy[2] . "-" . $fechaDummy[1] . "-" . $fechaDummy[0];
		$body = $field["mensaje"];
		$html .= "<tr><td>". $field["nombre"] . "</td><td><a href='mailto:". $field["correo"] . "?&body=". $body ."'>". $field["correo"] . "</a></td><td><a class='mostrarMensaje' href='#'>Mostrar mensaje</a></td><td><span class='" . $confirm . "'>". $newsletter . "</span></td><td>". $fecha . "</td></tr>";
		$html .= "<tr><td class='hidden mensaje' colspan='5'><p>". $field["mensaje"]. "</p></td></tr>";

	}
}
if($html == ""){
	echo 0;
}else{
	$_SESSION["init"] = $_SESSION["init"] + 5;
	echo $html;
}

?>