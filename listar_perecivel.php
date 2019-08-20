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
		
		include("classeProdutoP.php");
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Data Validade</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["perecivel"] as $i=>$p){
					$p->exibe_trProduto();
				}
			?>
		</tbody>
	</table>
	</body>
</html>