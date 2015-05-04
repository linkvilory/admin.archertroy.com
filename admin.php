<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	die();
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>

	<!-- Meta -->
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Css -->
	<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="css/main.css"/>
	<link type="text/css" rel="stylesheet" href="css/mail.css"/>
	<!-- Icons -->

	<!-- Title Web Site -->
	<title>Administrador ArcherTroy</title>
	</head>
	<body>

	<!-- Boostrap Template -->
	<div class="container-fluid">

		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://archertroy.com"><img src="img/logo.jpg" alt="ArcherTroy"/></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a data-ref="newsletter" href="#">Newsletter</a></li>
						<li><a data-ref="generador" href="#">Generador E-mail</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div id="newsletter" class="row">

			<div class="col-lg-12">
				<h1>NEWSLETTER</h1>
				<?php
					include_once("blocks/newsletter/newsletter.php");
				?>
				
				<input class="botonCargar" type="button" id="masCorreos" name="Cargar más" value="Cargar más"/>
				<input class="botonNewsletter" type="button" id="newsletter" name="Obtener correos" value="Obtener correos"/>
				<input class="botonNewsletterConfirmado" type="button" id="newsletterConfirmado" name="Obtener correos confirmados" value="Obtener correos confirmados"/>
			</div>
			
			<div class="col-lg-12">
				
				<p class="message"></p>
				<input class="exporter hidden" type="button" id="exporter" name="Exportar" value="Exportar"/>

			</div>
	   	</div>

	   	<div id="generador" class="row hidden">
	   		<div class="col-lg-6">
	   			<h1>Generador</h1>
				<div class="previewHTML">
					<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable"><tr><td align="center" valign="top" id="bodyCell">
					<table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td align="center" valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templatePreheader"><tr><td align="center" valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer"><tr><td valign="top" class="preheaderContainer" style="padding-top:9px;">
					<table class="mcnTextBlock" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody class="mcnTextBlockOuter"><tr><td class="mcnTextBlockInner" valign="top">
					<table class="mcnTextContentContainer" align="right" border="0" cellpadding="0" cellspacing="0" width="197"><tbody><tr><td class="mcnTextContent" style="padding-top:9px; padding-right:18px; padding-bottom:9px; padding-left:0;" valign="top"><a href="*|ARCHIVE|*" target="_blank">Ver este correo en el navegador</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></td></tr><tr><td align="center" valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader"><tr><td align="center" valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer"><tr><td valign="top" class="headerContainer" style="padding-top:10px; padding-bottom:10px;">
					<table class="mcnImageBlock" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody class="mcnImageBlockOuter"><tr><td style="padding:9px" class="mcnImageBlockInner" valign="top">
					<table class="mcnImageContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td class="mcnImageContent" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0;" valign="top"><img alt="" src="http://archertroy.com/wp-content/uploads/cover/homeLess959.jpg" style="max-width:960px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage" align="left" width="564"></td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></td></tr><tr><td align="center" valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody"><tr><td align="center" valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer"><tr><td valign="top" class="bodyContainer" style="padding-top:10px; padding-bottom:10px;">
					<table class="mcnTextBlock" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody class="mcnTextBlockOuter"><tr><td class="mcnTextBlockInner" valign="top">
					<table class="mcnTextContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="600"><tbody><tr><td class="mcnTextContent" style="padding-top:9px; padding-right: 18px; padding-bottom: 9px; padding-left: 18px;" valign="top">
					<img alt="" src="http://archertroy.com/wp-content/uploads/2014/11/logo.jpg" style="max-width:261px; padding-bottom: 0; display: block !important; vertical-align: bottom; margin: auto;" class="mcnImage" align="center" width="261">
					<div id="mensajeUpdate" style="color: #626161; font-size: 16px; text-transform: uppercase;">Aquí va tu mensaje</div><br><br>
					<table class="mcnImageGroupBlock" border="0" cellpadding="0" cellspacing="0" width="400px" style="background-color:#242524;margin: auto;text-align: center;"><tbody class="mcnImageGroupBlockOuter"><tr><td style="padding:0px" class="mcnImageGroupBlockInner" valign="top">
					<table class="mcnImageGroupContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="50"><tbody><tr><td class="mcnImageGroupContent" style="padding-left: 22px; padding-top: 0; padding-bottom: 0;" valign="top"><a href="https://www.facebook.com/archertroy" target="_blank"><img alt="" src="http://archertroy.com/wp-content/uploads/2014/11/redes1-1.png" style="max-width:50px; padding-bottom: 0;" class="mcnImage" width="40"></a></td></tr></tbody></table>
					<table class="mcnImageGroupContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="50"><tbody><tr><td class="mcnImageGroupContent" style="padding-left: 22px; padding-top: 0; padding-bottom: 0;" valign="top"><a href="https://twitter.com/ArcherTroy" target="_blank"><img alt="" src="http://archertroy.com/wp-content/uploads/2014/11/redes1-2.png" style="max-width:50px; padding-bottom: 0;" class="mcnImage" width="40"></a></td></tr></tbody></table>
					<table class="mcnImageGroupContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="50"><tbody><tr><td class="mcnImageGroupContent" style="padding-left: 22px; padding-top: 0; padding-bottom: 0;" valign="top"><a href="https://instagram.com/archertroy/" target="_blank"><img alt="" src="http://archertroy.com/wp-content/uploads/2014/11/redes1-3.png" style="max-width:50px; padding-bottom: 0;" class="mcnImage" width="40"></a></td></tr></tbody></table>
					<table class="mcnImageGroupContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="50"><tbody><tr><td class="mcnImageGroupContent" style="padding-left: 22px; padding-top: 0; padding-bottom: 0;" valign="top"><a href="https://www.pinterest.com/archertroyp/" target="_blank"><img alt="" src="http://archertroy.com/wp-content/uploads/2014/11/redes1-4.png" style="max-width:50px; padding-bottom: 0;" class="mcnImage" width="40"></a></td></tr></tbody></table>
					<table class="mcnImageGroupContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="50"><tbody><tr><td class="mcnImageGroupContent" style="padding-left: 22px; padding-top: 0; padding-bottom: 0;" valign="top"><a href="https://www.youtube.com/user/ConquistasArcher" tagert="_blank"><img alt="" src="http://archertroy.com/wp-content/uploads/2014/11/redes1-5.png" style="max-width:50px; padding-bottom: 0;" class="mcnImage" width="40"></a></td></tr></tbody></table>
					<table class="mcnImageGroupContentContainer" align="left" border="0" cellpadding="0" cellspacing="0" width="50"><tbody><tr><td class="mcnImageGroupContent" style="padding-left: 22px; padding-top: 0; padding-bottom: 0;" valign="top"><a href="https://plus.google.com/105080074709822071277/posts" target="_blank"><img alt="" src="http://archertroy.com/wp-content/uploads/2014/11/redes1-6.png" style="max-width:50px; padding-bottom: 0;" class="mcnImage" width="40"></a></td></tr></tbody></table></td></tr></tbody></table><span class="mc-toc-title" style="display: block;font-size: 9px;line-height: 12px;margin: 10px auto 0;text-align: justify;width: 400px;"><span><span class="reg">&reg;</span> ARCHER TROY S.A. DE C.V. LOS USUARIOS SE OBLIGAN A CUMPLIR CON LOS T&Eacute;RMINOS Y CONDICIONES DEL WEB. MARCA REGISTRADA. DECLARACI&Oacute;N DE PRIVACIDAD DE LA INFORMACI&Oacute;N DE M&Eacute;XICO (55) 55 39 22 72 </span></span></td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table></td></tr><tr><td align="center" valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter"><tr><td align="center" valign="top">
					<table border="0" cellpadding="0" cellspacing="0" width="600" class="templateContainer"><tr><td valign="top" class="footerContainer" style="padding-top:10px; padding-bottom:10px;"></td></tr></table></td></tr></table></td></tr></table></td></tr></table>
				</div>
			</div>
			<div class="col-lg-6">
				<textarea id="mensajeUpdater" placeholder="Aqui va tu texto"></textarea>

				<input class="generarEmail" type="button" id="generarEmail" name="Generar E-mail" value="Generar E-mail"/>

				<textarea id="output"></textarea>
			</div>
	   	</div>

	</div>

	<!-- Javascript Init -->
	<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/ckeditor.js"></script>
	<script type="text/javascript" src="js/config.js"></script>
	<script type="text/javascript">
		$(function(){
			$("body").on('click', '.mostrarMensaje', function(){
				$(this).parent().parent().next().children().toggleClass("hidden");
			});
			$(".nav.navbar-nav a").click(function(){
				var click = this;
				$(".row").each(function(){
					if($(this).hasClass("hidden")){
					}else{$(this).addClass("hidden");}
				})
				$(".nav.navbar-nav li").each(function(){
					$(this).removeClass("active");
				})
				$(click).parent().addClass("active");
				var bloque = $(click).attr("data-ref");
				console.log("#"+bloque+"");
				$("#"+bloque+"").removeClass("hidden");
			});
			var editor = CKEDITOR.replace( 'mensajeUpdater' );
			editor.on( 'change', function( evt ) {
			    $("#mensajeUpdate").html(evt.editor.getData());
			});
			$("#generarEmail").click(function(){
				$("#output").val();
				var txt = $("#mensajeUpdate").html();
				$.ajax({
					method: "POST",
					url: "utilities/minify/minify.php",
					data: { content: txt}
				})
				.done(function( data ) {
					if(data == 0){
						alert("Ha ocurrido un error al generar el correo.");
					}else{
						$("#output").val(data);
					}
				});
			});
			$(".botonCargar").click(function(){
				$.ajax({
					method: "POST",
					url: "blocks/newsletter/post.php",
					data: { }
				})
				.done(function( data ) {
					if(data == 0){
						alert("No hay más datos a mostrar.");
					}else{
						$(".mailtable").append(data);
					}
				});
			});

			$(".exporter").click(function(){
				var data = $(".message").html();
				window.location.href = "utilities/exporter/exporter.php?exporter=" + data;
			});

			$(".botonNewsletter").click(function(){
				$.ajax({
					method: "POST",
					url: "blocks/newsletter/getmail.php",
					data: { }
				})
				.done(function( data ) {
					$(".message").html(data);
					$(".exporter").removeClass("hidden");
					window.location.href = "mailto:?bcc=" + data;
				});
			});

			$(".botonNewsletterConfirmado").click(function(){
				$.ajax({
					method: "POST",
					url: "blocks/newsletter/getmailconfirm.php",
					data: { }
				})
				.done(function( data ) {
					$(".message").html(data);
					$(".exporter").removeClass("hidden");
					window.location.href = "mailto:?bcc=" + data;
				});
			});
		});
	</script>
	</body>
</html>