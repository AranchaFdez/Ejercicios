<html>
	<head>
	<meta charset="UTF-8">
    <link href="css06.css" rel="stylesheet" type="text/css" />
	<title>Ejercicios Simples PHP</title></head>
		<body>
		<div id="main">
			<div id="azul">
				<h1> Tabla de <br>Multiplicar</h1>
			</div>
			<div id="blanco">
			<?php
			$valor1=mt_rand(1,10);
			echo '<table>';
			?>
			<tr>
				<th><?php echo "Tabla del ".$valor1; ?> </th>
				<th></th>
			</tr>
			
			<?php
			
			for ($i = 0; $i <= 10; $i++) {
			
				echo "<td> $valor1 X $i </td>";
				echo "<td>".$valor1*$i."</td>";
			echo '</tr>';
			}

			?>
			
			
			<?php
				echo '</table>';
			?>
			</div>
		</div>
		</body>
</html>