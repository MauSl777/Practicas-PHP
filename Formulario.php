<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
	<!-- Agregar bulma.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bulma.min.css'); ?>">
</head>
<body>

	<section class="hero is-danger">
  <div class="hero-body">
    <p class="title">
      Formulario en PHP para registrar un empleado
    </p>
    <p class="subtitle">
      Mauricio Santos Lopez
    </p>
  </div>
</section>

	<section class="section">
	
		><div class="columns">

			<div class="column"></div>


		<div class="column is-three-fifths">
			<form action="procesar.php" method="post">
				<div>
					<label>Nombre:</label>
					<input class="input is-danger" type="text" name="nombre">
				</div>

				<div>
					<label>Apellido Paterno:</label>
					<input class="input is-danger" type="text" name="ApellPater">
				</div>

				<div>
					<label>Apellido Materno:</label>
					<input class="input is-danger" type="text" name="ApellMater">
				</div>

				

				<div>
					<label>Cargo:</label>
					<input class="input is-danger" type="text" name="cargo">
				</div>

				<div>
					<label>RFC:</label>
					<input class="input is-danger" type="RFC" name="rfc">
				</div>

				<div>
					<label>Curp:</label>
					<input class="input is-danger" type="Curp" name="curp">
				</div>

				<div>
					<label>Domicilio:</label>
					<input class="input is-danger" type="text" name="domicilio">
				</div>

				<div>
					<label>Telefono:</label>
					<input class="input is-danger" type="number" name="telefono">
				</div>

				<div>
					<label>Correo Electronico:</label>
					<input class="input is-danger" type="email" name="correo">
				</div>

				<div>
					<label>Sexo:</label>
					<input class="input is-danger" type="text" name="sexo">
				</div>

				<div>
					<label>Fecha de nacimiento:</label>
					<input class="input is-danger" type="text" name="fNacimiento">
				</div>

				<div>
					<label>Estado civil:</label>
					<input class="input is-danger" type="text" name="etdciv">
				</div>

				<div>
					<label>Escolaridad:</label>
					<input class="input is-danger" type="text" name="escolaridad">
				</div>

				<div>
					<label>Referencia familiar :</label>
					<input class="input is-danger" type="text" name="refFamily">
				</div>

				<div>
					<label>Observaciones:</label>
					<input class="input is-danger" type="text" name="obser">
				</div>

				<div>
					<input type="submit" class="button is-link" value="Guardar">
				</div>


			</form>


		</div>

			<div class="column"></div>
			
		</div>




	</section>


	<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Developed</strong> by <a href="https://jgthms.com">Mauricio Santos Lopez</a>. The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
      is licensed computer science fourth semester 
    </p>
  </div>
</footer>

</body>
</html>

