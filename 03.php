<html>
	<head>
	<meta charset="UTF-8">
    <link href="css02.css" rel="stylesheet" type="text/css" />
	</head>
		<body>
		<h3>Ejercicio 3 </h3>
		<?php
        $filas = random_int(1,10);
            for($i=1;$i<=$filas;$i++){
                for($x=1;$x<=$filas-$i;$x++){
                    echo "<code>&nbsp";
                }
                for($j=1;$j<=($i*2)-1;$j++){
                    echo"*";
                }
                echo "</code>";
                echo "</br>";
            }
        ?>
		</body>
</hmlt>
