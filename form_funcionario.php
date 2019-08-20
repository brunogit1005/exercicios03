<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("cabecalho.php");
	?>
		<form method="post" action="cadastro_funcionario.php">
            <?php 
                include("form_pessoa.php");
            ?>
			<input type="text" name="salario" placeholder="Digite o salario..." /> <br />
			<input type="text" name="area" placeholder="Digite a area..." /> <br />
			<input type="text" name="turno" placeholder="Digite o turno..." /> <br />
				<input type="submit" value="cadastrar" /> <br />
		</form>
	</body>
</html>
