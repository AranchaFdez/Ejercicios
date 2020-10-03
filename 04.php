<html>
	<head>
	<meta charset="UTF-8">
    <link href="css02.css" rel="stylesheet" type="text/css" />
	</head>
		<body>
		<h3>Ejercicio 3 </h3>
		<?php
		$cont=0;
		for(;;){
			
			$aleatorio=random_int(1,9);
			if ($aleatorio==6){
				$cont++;
			
			}
			else{
				$cont=0;

			}
			if($cont==3){
				echo "El contador ya ha llegado a ".$cont;
				break;
		}
	
		}
		
		echo "<p>El programa ha tardado en ejecutarse :".(microtime(True))."</p>";
		echo "Fin del programa del demonio";


		?>
		</body>
</html>