<html>
	<head>
	<meta charset="UTF-8">
    <link href="css02.css" rel="stylesheet" type="text/css" />
	</head>
		<body>
		<h3>Ejercicio 2 </h3>
		<?php
		$aleatorio=random_int(1,9);
		
		for ($i = 1; $i <= $aleatorio; $i++) {
			
			for($x=1;$x<=$i; $x++){
			if($i%2==0){
			
			echo '<span class="par">'.$i;
				}
			else{
			
			echo '<span id="impar" >'.$i;

			}
			
			
				
			}
			echo"</span>";
			echo "</br>";
		}

		?>
		</body>
</html>