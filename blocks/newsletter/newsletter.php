<?php
session_start();
include_once("query.php");
/**
 * Bloque para el menu de newsletter
 * En este bloque se mostrarán los usuarios registrados en el formulario del sitio oficial de ArcherTroy
 * Para una fácil adquisición de los datos registrados en la base de datos
 */

function init(){

	echo buildMostRecent();

}

function buildMostRecent(){
	
	return recentMails();

}

init();

?>

<input class="botonCargar" type="button" id="masCorreos" name="Cargar más" value="Cargar más"/>
<input class="botonNewsletter" type="button" id="newsletter" name="Obtener correos" value="Obtener correos"/>
<input class="botonNewsletterConfirmado" type="button" id="newsletterConfirmado" name="Obtener correos confirmados" value="Obtener correos confirmados"/>
<input class="exporter" type="button" id="exporter" name="Exportar" value="Exportar"/>