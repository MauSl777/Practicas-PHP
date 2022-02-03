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

				<?php

					$nombre= $_POST['nombre']
					$ApellMater= $_POST['ApellMater']
					$ApellPater= $_POST['ApellPater']
					$cargo= $_POST['cargo']
					$rfc= $_POST['rfc']
					$curp= $_POST['curp']
					$domicilio= $_POST['domicilio']
					$telefono= $_POST['telefono']
					$correo= $_POST['correo']
					$sexo= $_POST['sexo']
					$fNacimiento=$_POST['fNacimiento']
					$etdciv= $_POST['etdciv']
					$escolaridad= $_POST['escolaridad']
					$refFamily= $_POST['refFamily']
					$obser= $_POST['obser']


					echo $nombre . " " . $ApellPater . " " . $ApellMater;
					echo $cargo .
					echo $rfc .
					echo $curp .
					echo $domicilio . 
					echo $telefono . " " . $correo . 
					echo $sexo .
					echo $fNacimiento . " " . $etdciv . 
					echo $escolaridad .
					echo $refFamily . 
					echo $obser . 



				?>

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

