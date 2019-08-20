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
		
		include("classeFuncionario.php");
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Sálario</th>
				<th>Área</th>
                <th>Turno</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["funcionario"] as $i=>$p){
					$p->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>