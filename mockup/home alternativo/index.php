<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<!--meta name="description" content="Admiistración contable del Sindicato Grafico Sureño" /-->
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	<!--title>Sindicato Grafico Sureño: Gestión</title-->

	<link rel="stylesheet" type="text/css" href="../../librerias/css/bootstrap.min.css">
	<script type="text/javascript" src="../../librerias/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../../librerias/js/bootstrap.min.js"></script>
	
</head>
<body>
	<header>
		<ul>
			<li>logo</li>
			<li>menu</li>
		</ul>
	</header>
	<!--nav class="navbar navbar-default" role="navigation">
		<ul class="container-fluid">
			<li>Empresa</li>
			<li>Anuncios</li>
			<li>Menu</li>
		</ul>
	</nav-->
	<nav class="navbar navbar-inverse" role="navigation">
		<!-- El logotipo y el icono que despliega el menú se agrupan
		para mostrarlos mejor en los dispositivos móviles -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-ex1-collapse">
				<span class="sr-only">Desplegar navegación</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Nombre de la empresa</a>
		</div>

		<!-- Agrupar los enlaces de navegación, los formularios y cualquier
		otro elemento que se pueda ocultar al minimizar la barra -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active">
 					<a href="#">Nomina de Trabajadores</a>
 				</li>
 				<li>
 					<a href="#">Estudio Contable - Datos</a>
 				</li>
 				<li>
 					<a href="#">Impresión de Boletas</a>
 				</li>
 				<li>
 					<a href="#">Escala Salarial - Sector Obra</a>
 				</li>
 				<li>
 					<a href="#">Escala Salarial - Zona Patagonica</a>
 				</li>
 				<li>
 					<a href="#">Escala Salarial - Sector Diario</a>
 				</li>
 				<li>
 					<a href="#">Horas Exedentes</a>
 				</li>
 				<li>
 					<a href="#">Ospida - Obra Social</a>
 				</li>
 				<li>
 					<a href="#">Historial de Bolestas</a>
 				</li>
 				<li>
 					<a href="#">Tutorial</a>
 				</li>
				<!--li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					Menú #1 <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Acción #1</a></li>
						<li><a href="#">Acción #2</a></li>
						<li><a href="#">Acción #3</a></li>
						<li class="divider"></li>
						<li><a href="#">Acción #4</a></li>
						<li class="divider"></li>
						<li><a href="#">Acción #5</a></li>
					</ul>
				</li-->
			</ul>
		</div>
	</nav>
 	<section>
 		<article>
 			<select id="cd-dropdown" class="cd-select">
 				<option value="-1" selected>Choose an animal</option>
 				<option value="1" class="icon-monkey">Monkey</option>
 				<option value="2" class="icon-bear">Bear</option>
 				<option value="3" class="icon-squirrel">Squirrel</option>
 				<option value="4" class="icon-elephant">Elephant</option>
 			</select> 
 		</article>
 	</section>
 	<footer></footer>
 	<script type="text/javascript">
			
			$( function() {
				
				$( '#cd-dropdown' ).dropdown( {
					gutter : 5
				} );

			});
	</script>
</body>
</html>