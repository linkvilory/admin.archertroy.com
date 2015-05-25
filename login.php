<?php
session_start();
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
	<!-- Icons -->

	<!-- Title Web Site -->
	<title>Administrador ArcherTroy</title>
	</head>
	<body>

	<!-- Boostrap Template -->
	<div class="container-fluid">

		<div class="inner-alert hidden">
			<p class='alert-danger'><b class="info-alert"></b><em class="desc-alert"></em></p>
		</div>

		<div id="login" class="row">

			<div class="col-lg-2 col-lg-offset-5" >

				<?php
					include_once("blocks/login/login.php");
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
	<script type="text/javascript">
		$(function(){

			$(".login").click(function(){
				var name = $(".name").val();
				var pass = $(".pass").val();
				$.ajax({
					method: "POST",
					url: "blocks/login/check.php",
					data: { name: name, pass: pass }
				})
				.done(function( data ) {
					//Succesful
					if (data == 1){
						window.location = "admin.php";
					}else{
						$(".info-alert").html("Error: ");
						$(".desc-alert").html("Las credenciales son incorrectas.");
						$(".inner-alert").removeClass("hidden");
						setTimeout(function(){
							$(".inner-alert").addClass("hidden");
						}, 1500); 
					}
					
				});
			});

			$(document).keydown(function (e){
			    if(e.keyCode == 13){
			        $( ".login" ).trigger( "click" );
			    }
			})
		});
	</script>
	</body>
</html>