<html>
	<head>
	<meta charset="UTF-8">
    <link href="css02.css" rel="stylesheet" type="text/css" />
	</head>
		<body>
		<h3>Ejercicio 3 </h3>
		<?php
		$aleatorio=random_int(1,9);
		$j=1;
		for ($i = 1; $i <= $aleatorio; $i++) {
			
			for($x=1;$x<=$j; $x++){
			
			
			echo '<code>'."*";
				

			}
			$j+=2;
			echo"</code>";
			echo "</br>";
		}

		?>
		</body>
</html>