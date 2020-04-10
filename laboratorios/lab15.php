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

				<li class="nav-item">
					<a class="nav-link" id="consultar-tab" data-toggle="tab" href="#consultar" role="tab" aria-controls="consultar" aria-selected="false">Mis Juegos</a>
				</li>

				<li class="nav-item active">
					<a class="nav-link" id="insertar-tab" data-toggle="tab" href="#insertar" role="tab" aria-controls="insertar" aria-selected="false">Añadir/Editar Juego</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" id="borrar-tab" data-toggle="tab" href="#borrar" role="tab" aria-controls="borrar" aria-selected="false">Borrar Juego</a>
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
				<div class="tab-pane" id="consultar" role="tabpanel" aria-labelledby="consultar-tab">


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
												<tbody>
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

				<!--insertar -->
				<div class="tab-pane active" id="insertar" role="tabpanel" aria-labelledby="insertar-tab">



					<!--row eliminar-->
					<div class="row p-1">
						<div class="col-sm ">
							<div class="container  d-flex justify-content-center align-items-center">

								<div class="card w-100 d-flex bg-secondary">
									<!--Card Header-->
									<div class="card-header bg-secondary pt-4">
										<h4 class="card-title text-center">Añadir Juego</h4>
									</div>
									<!--End Card Header-->
									<!--Card Body-->
									<div class="card-body">



										<form class="card-text bg-secondary p-4 rounded" action="./lab15_controllers/juego_insertar.php" method="POST">
											<!--Ingresar juego_nombre-->
											<div class="form-group">
												<label for="juego_nombre">Nombre</label>
												<input type="text" class="form-control" id="juego_nombre" name="juego_nombre" placeholder="Resident Evil 2">
											</div>
											<!--Ingresar juego_genero-->
											<div class="form-group">
												<label for="juego_genero">Género</label>
												<select class="form-control" id="juego_genero" name="juego_genero">
													<?php echo generos_menu(); ?>
												</select>
											</div>
											<!--Ingresar juego_precio-->
											<div class="form-group">
												<label for="juego_precio">Precio</label>
												<input type="number" class="form-control" id="juego_precio" name="juego_precio" min=9.99 max=59.99 placeholder="59.99">
											</div>
											<!--Ingresar juego_estudio-->
											<label for="juego_estudio">Estudio</label>
											<select class="form-control" id="juego_estudio" name="juego_estudio" value="Capcom">
												<?php echo estudios_menu(); ?>
											</select>
											<!--Botón de ingresar-->
											<div class="row m-2 justify-content-center">
												<button type="submit" class="btn btn-purple m-2">Añadir</button>
											</div>
										</form>




									</div>
									<!--End Card Body-->
									<!--Card Footer-->
									<div class="card-footer bg-secondary">

									</div>
									<!--End Card Footer-->

								</div>
							</div>
						</div>
						<div class="col-sm ">
							<div class="container  d-flex justify-content-center align-items-center">

								<div class="card w-100 d-flex bg-secondary">
									<!--Card Header-->
									<div class="card-header bg-secondary pt-4">
										<h4 class="card-title text-center">Editar Juego</h4>
									</div>
									<!--End Card Header-->
									<!--Card Body-->
									<div class="card-body">



										<form class="card-text bg-secondary p-4 rounded" action="./lab15_controllers/juego_editar.php" method="POST">
											<!--Ingresar juego_nombre-->
											<div class="form-group">
												<label for="juego_nombre">Nombre</label>
												<select class="form-control" id="juego_nombre" name="juego_nombre" value="Capcom">
													<?php echo juegos_menu(); ?>
												</select>
											</div>
											<!--Ingresar juego_genero-->
											<div class="form-group">
												<label for="juego_genero">Género</label>
												<select class="form-control" id="juego_genero" name="juego_genero">
													<?php echo generos_menu(); ?>
												</select>
											</div>
											<!--Ingresar juego_precio-->
											<div class="form-group">
												<label for="juego_precio">Precio</label>
												<input type="number" class="form-control" id="juego_precio" name="juego_precio" min=9.99 max=59.99 placeholder="59.99">
											</div>
											<!--Ingresar juego_estudio-->
											<label for="juego_estudio">Estudio</label>
											<select class="form-control" id="juego_estudio" name="juego_estudio" value="Capcom">
												<?php echo estudios_menu(); ?>
											</select>
											<!--Botón de ingresar-->
											<div class="row m-2 justify-content-center">
												<button type="submit" class="btn btn-purple m-2">Actualizar</button>
											</div>
										</form>




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
				<!-- End insertar -->


				<!-- borrar -->
				<div class="tab-pane" id="borrar" role="tabpanel" aria-labelledby="borrar-tab">
					<!-- Container -->
					<div class="container">



						<!--row eliminar-->
						<div class="row p-1 ">
							<div class="col-sm ">
								<div class="container d-flex justify-content-center align-items-center">

									<div class="card w-50 d-flex bg-secondary">
										<!--Card Header-->
										<div class="card-header bg-secondary pt-4">
											<h4 class="card-title text-center">Eliminar Juego</h4>
										</div>
										<!--End Card Header-->
										<!--Card Body-->
										<div class="card-body">



											<form class="card-text bg-secondary rounded" action="./lab15_controllers/juego_eliminar.php" method="POST">

												<!--Ingresar juego_estudio-->
												<label for="juego_nombre">Nombre</label>
												<select class="form-control" id="juego_nombre" name="juego_nombre" value="Capcom">
													<?php echo juegos_menu(); ?>
												</select>
												<!--Botón de ingresar-->
												<div class="row mt-4 justify-content-center">
													<button type="submit" class="btn btn-purple m-2">Eliminar</button>
												</div>
											</form>




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
				<!-- End borrar -->





				<!-- Preguntas -->
				<div class="tab-pane" id="preguntas" role="tabpanel" aria-labelledby="preguntas-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<h5>
									¿Por qué es una buena práctica separar el modelo del controlador?
								</h5>
								<p>
									Porque de esa manera se separan los metodos y los eventos que están pendientes a las acciones del usuario en la vista, resultado en una aplicación más ordendada y mantenible. Mientras que en el modelo solo hay funciones que realizan queries a la base de datos, en el modelo se toman las decisiones apropiadas para responder con estos métodos de manera adecuada a los eventos que ocurrén en la vista. [1]
								</p>

								<h5>
									¿Qué es SQL injection y cómo se puede prevenir?
								</h5>
									
								<p>
									Es injección de codigo malicioso sql que pude alterar la estructura de la base de datos al ser ingresado via una forma en la vista. Para prevenirlo, se debe preparar las queries; primero se separa los datos del query, se hace un bind de los datos con su tipo de dato, y finalmente se envía la consulta preparada para que sea ejecutada. [2] 
									<ul>
										<li>$expected_data = 1;</li>
										<li>$stmt = $mysqli->prepare("SELECT * FROM users where id=?");</li>
										<li>$stmt->bind_param("d", $expected_data);</li>
										<li>$stmt->execute();</li>
										<li>$result = $stmt->get_result();</li>
									</ul>


								</p>

								

								<h5>
									Referencias.
								</h5>
								<p>
									<ul>
										<li>
											[1] https://www.geeksforgeeks.org/mvc-design-pattern/
										</li>
										<li>
											[2] https://medium.com/@jpmorris/prevent-sql-injection-attacks-with-prepared-statements-3e4b7ec13a7
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