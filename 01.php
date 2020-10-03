<html>
	<head><title>Ejercicios Simples PHP</title></head>
		<body>
		<h3>Ejercicio 1  PHP :</h3>
		<?php
		$aleatorio=random_int(1,10);
		echo "Otra forma de aleatorio : $aleatorio<br>";
		$valor1=mt_rand(1,10);
		$valor2=mt_rand(1,10);
			
		$potencia=$valor1**$valor2;
		$numero_al_cubo = pow($valor1, $valor2);

		echo "Valor uno :$valor1 <br>";
		echo "Valor dos :$valor2 <br>";
		echo "Suma :$valor1 + $valor2 =".($valor1 + $valor2)."<br>";
		echo "Resta :$valor1 - $valor2 =".($valor1 - $valor2)."<br>";
		echo "Multiplicacion :$valor1 * $valor2 =".($valor1 * $valor2)."<br>";
		echo "Division :$valor1 / $valor2 =".($valor1 / $valor2)."<br>";
		echo "Suma :$valor1 % $valor2 =".($valor1 % $valor2)."<br>";
		echo"Potencia :$valor1 ** $valor2 = $potencia<br>";
		echo"Potencia con pow :$numero_al_cubo<br>";

		
		$poten=1;
		for ($i = 1; $i <= $valor2; $i++) {
			$poten=$poten*$valor1;
		}
		echo"Potencia del ciclo:$poten<br>";
		
		

		?>
		</body>
</html>