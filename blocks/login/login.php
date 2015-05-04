<?php

function init(){

$html = <<<EOF
	<a href="http://archertroy.com"><img src="img/logo.jpg" alt="ArcherTroy"/></a>
	<input class="name" type="text" id="name" name="name" placeholder="Nombre"/>
	<input class="pass" type="password" id="pass" name="pass" placeholder="Contraseña"/>
	<input class="login" type="button" id="login" name="Entrar" value="Entrar"/>
EOF;

	echo $html;
}

init();
?> 