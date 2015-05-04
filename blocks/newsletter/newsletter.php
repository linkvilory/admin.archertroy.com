<?php
session_start();
include_once("query.php");
/**
 * Bloque para el menu de newsletter
 * En este bloque se mostrarán los usuarios registrados en el formulario del sitio oficial de ArcherTroy
 * Para una fácil adquisición de los datos registrados en la base de datos
 */

function init(){

	//echo buildFields(getQueryFields());
	echo buildMostRecent();

}

function buildFields($array){

	$html = '<div class="mailMenu">';
	foreach ($array as $key => $value) {

		$html .= '<div class="mailOptions"><input data-type="' . $array[$key] . '" type="checkbox" name="' . $array[$key] . '"/><p>' . $array[$key] . '</p></div>';

	}

	$html .= "</div>";
	return $html;
}

function getQueryFields(){

	$arrayQueryFields = array("Todos", "Id", "Nombre", "Correo", "Mensaje", "Newsletter", "Confirmado", "Fecha");

	return $arrayQueryFields;
}

function buildMostRecent(){
	
	return recentMails();

}

init();
?>