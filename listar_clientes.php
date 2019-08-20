<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		
		include("classeCliente.php");
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<tbody>
			<?php
				foreach($_SESSION["cliente"] as $i=>$p){
					$p->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>