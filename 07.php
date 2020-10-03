<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="5">
	<title>Ejercicios Simples PHP</title>
	<style>
		table,td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		#rojo{
			background-color: red;
		}
		#verde{
			background-color: green;
		}
		#azul{
			background-color: blue;
		}
	</style>
	</head>
		<body>
		<h3>Ejercicio 7  PHP :</h3>
		
		<?php
			
			$rojo=random_int(100,500);
			echo '<table width= '.$rojo.'>';
			echo "<tr>";
			echo '<td id="rojo">'."Rojo (".$rojo.")</td>";	
			echo "</tr>";
			echo "</table>";
			
			$verde=random_int(100,500);
			echo '<table width= '.$verde.'>';
			echo "<tr>";
			echo '<td id="verde">'."Verde (".$verde.")</td>";	
			echo "</tr>";
			echo "</table>";
			
			$azul=random_int(100,500);
			echo '<table width= '.$azul.'>';
			echo "<tr>";
			echo '<td id="azul">'."Azul (".$azul.")</td>";	
			echo "</tr>";
			echo "</table>";
		
		?>
		</body>
</html>