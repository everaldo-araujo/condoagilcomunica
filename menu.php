<?php

date_default_timezone_set('America/Porto_Velho');

$usuarioAutenticado = "Everaldo";


echo	'<nav>
			<div class="nav-wrapper green lighten-1">
				<a href="index.php" class="brand-logo"><i class="small material-icons">grain</i>Condoágil</a>
				<a href="#" data-activates="menu-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="login.php">Login</a></li>
					<li><a href="index.php">Página Inicial</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="configuracoesDoUsuario.php"><i class="small material-icons">account_circle</i></a></li>
					<li><a href="configuracoesDoUsuario.php"><i class="small material-icons">facebook</i></a></li>
				</ul>
				<ul class="side-nav" id="menu-mobile">
					<li><a href="login.php">Login</a></li>
					<li><a href="index.php">Página Inicial</a></li>
					<li><a href="contato.php">Contato</a></li>
					<li><a href="configuracoesDoUsuario.php"><i class="small material-icons">account_circle</i></a></li>
					<li><a href="configuracoesDoUsuario.php"><i class="small material-icons">facebook</i></a></li>					
				</ul>
			</div>
		</nav>
		';
?>