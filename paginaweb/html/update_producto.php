<?php
	require 'conex.php';
	$id=$_POST['id_producto'];
  $producto=$_POST['producto'];
  $tecnica=$_POST['tecnica'];
  $material=$_POST['material'];
  $precio_unidad=$_POST['precio_unidad'];
  $precio_mayoreo=$_POST['precio_mayoreo'];


	$sql = "UPDATE SET  id='id_producto', producto='$producto', tecnica='$tecnica', material='$material', precio_unidad='$precio_unidad', precio_mayoreo='$precio_mayoreo' WHERE id_producto = '$id'";
	$resultado = $mysqli->query($sql);

?>

<html lang="es">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>

					<a href="productos.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
