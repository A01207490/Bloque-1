<html>

<?php
session_start();
require_once("./util.php");
?>

<head>

	<?php include '_head.html'; ?>
	<title><?php echo basename(__DIR__); ?></title>
</head>

<body>
	<?php include '_sidebar.html'; ?>
	<div id="main">


		<!-- TOP NAVBAR -->
		<nav class="navbar navbar-expand-lg bg-primary border-bottom" id="navbar">
			<!-- Toogle Sidebar Button -->
			<button class="btn btn-green" onclick="openSideBar()"><i class="material-icons text-primary">menu</i></button>
			<!-- End Toogle Sidebar Button -->
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">

				<li class="nav-item active">
					<a class="nav-link" id="consultar-tab" data-toggle="tab" href="#consultar" role="tab" aria-controls="consultar" aria-selected="false">Mis Juegos</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" id="preguntas-tab" data-toggle="tab" href="#preguntas" role="tab" aria-controls="preguntas" aria-selected="false">Preguntas</a>
				</li>


			</ul>
			<!-- End Nav tabs -->
		</nav>
		<!-- END TOP NAVBAR -->

		<!--------------------------------------------------------------------------------------->

		<!-- PAGE CONTENT -->
		<div class="container-fluid bg-info content">

			<!-- Contenido de las tabs -->
			<div class="tab-content">

				<!-- consultar -->
				<div class="tab-pane active" id="consultar" role="tabpanel" aria-labelledby="consultar-tab">


					<!-- Container -->
					<div class="container">



						<!--row eliminar-->
						<div class="row p-1 ">
							<div class="col-sm ">
								<div class="container d-flex justify-content-center align-items-center">

									<div class="card w-100 d-flex bg-secondary">
										<!--Card Header-->
										<div class="card-header bg-secondary pt-4">
											<h4 class="card-title text-center ">Mis Juegos</h4>



											<div class="card-text bg-secondary p-4 rounded">
												<!--Ingresar juego_genero-->
												<div class="form-group">
													<label for="juego_genero">Género</label>
													<select class="form-control" id="juego_genero" name="juego_genero">
														<?php echo generos_menu(); ?>
													</select>
												</div>
												<!--Ingresar juego_estudio-->
												<label for="juego_estudio">Estudio</label>
												<select class="form-control" id="juego_estudio" name="juego_estudio" value="Capcom">
													<?php echo estudios_menu(); ?>
												</select>
												<!--Botón de ingresar-->
												<div class="row m-2 justify-content-center">
													<button class="btn btn-purple m-2" id="filtrar">Filtrar</button>
												</div>
											</div>
										</div>
										<!--End Card Header-->
										<!--Card Body-->
										<div class="card-body">



											<table class='table table-primary table-hover'>
												<thead class='bg-primary text-light'>
													<tr>
														<th>Juego</th>
														<th>Genero</th>
														<th>Precio</th>
														<th>Estudio</th>
													</tr>
												</thead>
												<tbody id="juegos">
													<?php echo juegos_consultar("", ""); ?>
												</tbody>
											</table>




										</div>
										<!--End Card Body-->
										<!--Card Footer-->
										<div class="card-footer bg-secondary">

										</div>
										<!--End Card Footer-->

									</div>
								</div>
							</div>

						</div>
						<!-- End row eliminar -->

					</div>
					<!-- End Container -->

				</div>
				<!-- End consultar -->


				<!-- Preguntas -->
				<div class="tab-pane" id="preguntas" role="tabpanel" aria-labelledby="preguntas-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<h5>
									¿Qué importancia tiene AJAX en el desarrollo de RIA's (Rich Internet Applications?
								</h5>
								<p>
									Permite hacer peticiones para actualizar solo un componente de la página sin necesidad de cargar toda la página nuevamente, lo cual hace que las respuetas sean más rápidas. [1]
								</p>

								<h5>
									¿Qué implicaciones de seguridad tiene AJAX? ¿Dónde se deben hacer las validaciones de seguridad, del lado del cliente o del lado del servidor?
								</h5>
								<p>
									Con la utilización de ajax, las validaciones ahora se pueden hacer tan pronto se termina de llenar una forma; es decir, se puede mandar una petición asíncrona al servidor para validar que los datos ingresados sean correctos. [2]



								</p>
								<h5>
									¿Qué es JSON?
								</h5>
								<p>
									JSON significa JavaScript Object Notation. Es un formato ligero para almacenar y transportar datos. Usualmente se usa cuado datos son enviados por un servidor a una página web.
									[3]
								</p>



								<h5>
									Referencias.
								</h5>
								<p>
									<ul>
										<li>
											[1] https://www.computerworld.com/article/2551058/rich-internet-applications.html
										</li>
										<li>
											[2] https://www.the-art-of-web.com/javascript/ajax-validate/
										</li>
										<li>
											[3] https://www.w3schools.com/whatis/whatis_json.asp 
										</li>

									</ul>
								</p>
							</div>
						</form>
					</div>
					<!-- End Container -->
				</div>
				<!-- End Preguntas -->




			</div>
			<!-- End de las tabs -->
		</div>
		<!-- END PAGE CONTENT -->
	</div>

	<?php include '_footer.html'; ?>
</body>


</html>