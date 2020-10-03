<html>
	<head>
	<meta charset="UTF-8">
    <link href="css05.css" rel="stylesheet" type="text/css" />
	<title>Ejercicios Simples PHP</title></head>
		<body>
		<h3>Ejercicio 5  PHP :</h3>
		
		<?php
		$valor1=mt_rand(1,10);
		$valor2=mt_rand(1,10);
			
		$resta=$valor1-$valor2;
		$suma=$valor1+$valor2;
		$division=$valor1/$valor2;
		$multi=$valor1*$valor2;
		$modulo=$valor1%$valor2;
		$potencia=$valor1**$valor2;
		$numero_al_cubo = pow($valor1, $valor2);
		echo '<table>';
		
		
		$poten=1;
		for ($i = 1; $i <= $valor2; $i++) {
			$poten=$poten*$valor1;
		}
	
		echo "1º Numero : ".$valor1.'<br>';
		echo "2º Numero : ".$valor2.'<br>';
		echo '<br>'

		?>
		<tr>
			<th><?php echo "Operacion"; ?> </th>
			<th><?php echo "Resultado" ;?></th>
		</tr>
		<tr>
			<td><?php echo $valor1 ."+". $valor2 ; ?> </td>
			<td id="izq2"><?php echo " $suma"; ?> </td>
		</tr>
		<tr>
			<td id="gris"><?php echo $valor1 ."-". $valor2 ; ?> </td>
			<td id="izq"><?php echo " $resta"; ?> </td>
		</tr>
		<tr>
			<td><?php echo $valor1 ."*". $valor2 ; ?> </td>
			<td id="izq2"><?php echo " $multi"; ?> </td>
		</tr>
		<tr>
			<td id="gris"><?php echo $valor1 ."/". $valor2 ; ?> </td>
			<td id="izq"><?php echo " $division"; ?> </td>
		</tr>
		<tr>
			<td><?php echo $valor1 ."%". $valor2 ; ?> </td>
			<td id="izq2"><?php echo " $modulo"; ?> </td>
		</tr>
		<tr>
			<td id="gris"><?php echo $valor1 .'<sup>'. $valor2.'</sup>'; ?> </td>
			<td id="izq"><?php echo " $poten"; ?> </td>
		</tr>
		<?php
			echo '</table>';
		?>
		</body>
</html>

		