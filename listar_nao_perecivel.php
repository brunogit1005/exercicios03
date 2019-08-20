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
		
		include("classeProdutoNP.php");
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<tbody>
			<?php
				foreach($_SESSION["nao_perecivel"] as $i=>$p){
					$p->exibe_trProduto();
				}
			?>
		</tbody>
	</table>
	</body>
</html>