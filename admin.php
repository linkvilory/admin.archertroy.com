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
	<link type="text/css" rel="stylesheet" href="css/animate.css"/>
	<!-- Icons -->

	<!-- Title Web Site -->
	<title>Administrador ArcherTroy</title>
	</head>
	<body>

	<!-- Boostrap Template -->
	<!-- alert-success
	 alert-info
	 alert-warning
	 alert-danger
	 alert-danger -->
	<div class="container-fluid">
		<div class="inner-alert hidden">
			<p class='alert-warning'><b class="info-alert"></b><em class="desc-alert"></em></p>
		</div>

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
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="logout"><a data-ref="logout" href="#">Salir</a></li>
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
			</div>
			
			<div class="col-lg-12">
				
				<p class="message"></p>

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
				if(bloque == "logout"){
					window.location = "blocks/login/logout.php";
				}
				$("#"+bloque+"").removeClass("hidden");
			});
			
			$(".botonCargar").click(function(){
				$.ajax({
					method: "POST",
					url: "blocks/newsletter/post.php",
					data: { }
				})
				.done(function( data ) {
					if(data == 0){
						$(".info-alert").html("Info: ");
						$(".desc-alert").html("No hay más datos a mostrar.");
						$(".inner-alert").removeClass("hidden");
						setTimeout(function(){
							$(".inner-alert").addClass("hidden");
						}, 1500); 

					}else{
						$(".mailtable").append(data);
					}
				});
			});

			$(".exporter").click(function(){
				window.location.href = "utilities/exporter/exporter.php";
			});

			$(".botonNewsletter").click(function(){
				$.ajax({
					method: "POST",
					url: "blocks/newsletter/getmail.php",
					data: { }
				})
				.done(function( data ) {
					$(".message").html(data);
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
					window.location.href = "mailto:?bcc=" + data;
				});
			});
		});
	</script>
	</body>
</html>