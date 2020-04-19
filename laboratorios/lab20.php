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
					<a class="nav-link" id="consultar-tab" data-toggle="tab" href="#consultar" role="tab" aria-controls="consultar" aria-selected="false">Mis Juegos (JQuery)</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" id="insertar-tab" data-toggle="tab" href="#insertar" role="tab" aria-controls="insertar" aria-selected="false">Añadir Juego (JQuery)</a>
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
													<button class="btn btn-purple m-2" id="filtrar_juegos_jquery">Filtrar</button>
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

				<!--insertar -->
				<div class="tab-pane" id="insertar" role="tabpanel" aria-labelledby="insertar-tab">



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



										<div class="card-text bg-secondary p-4 rounded">
											<!--Ingresar juego_nombre-->
											<div class="form-group">
												<label for="juego_nombre">Nombre</label>
												<input type="text" class="form-control" id="juego_nombre_insertar" name="juego_nombre" placeholder="Resident Evil 2">
											</div>
											<!--Ingresar juego_genero-->
											<div class="form-group">
												<label for="juego_genero">Género</label>
												<select class="form-control" id="juego_genero_insertar" name="juego_genero">
													<?php echo generos_menu(); ?>
												</select>
											</div>
											<!--Ingresar juego_precio-->
											<div class="form-group">
												<label for="juego_precio">Precio</label>
												<input type="number" class="form-control" id="juego_precio_insertar" name="juego_precio" min=9.99 max=59.99 placeholder="59.99">
											</div>
											<!--Ingresar juego_estudio-->
											<label for="juego_estudio">Estudio</label>
											<select class="form-control" id="juego_estudio_insertar" name="juego_estudio_insertar" value="Capcom">
												<?php echo estudios_menu(); ?>
											</select>
											<!--Botón de ingresar-->
											<div class="row m-2 justify-content-center">
												<button class="btn btn-purple" id="anadir_juego_jquery">Añadir</button>
											</div>
											<div class="row m-2 justify-content-center" id="juego_insertar_mensaje">

											</div>
										</div>




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
				<!-- Preguntas -->
				<div class="tab-pane" id="preguntas" role="tabpanel" aria-labelledby="preguntas-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<h5>
									Elabora un diagrama y explica cómo funciona AJAX.
								</h5>
								<p>
									<img src="resources/images/ajax.gif" alt="ajax">
									<ol>
										<li>
											Un evento ocurre en la página.
										</li>
										<li>
											Un objeto XMLHttpRequest se crea vía JavaScript.
										</li>
										<li>
											El objeto XMLHttpRequest manda una petición al servidor.
										</li>
										<li>
											El servidor procesa la petición.
										</li>
										<li>
											El servidor regresa una respueta a la página web.
										</li>
										<li>
											La respuesta es leida en el archivo JavaScript del cuál se mando la petición.
										</li>
										<li>
											En el archivo JavaScript, se procesa la información para actulizar la página.
										</li>
									</ol>
									[1]
								</p>


								<h5>
									¿Qué alternativas a jQuery existen?
								</h5>
								<p>
									Fetch API, Axios y SuperAgent. [2]



								</p>
								<h5>
									¿Qué es una promesa en js?
								</h5>
								<p>
									Una promesa es un objeto que puede producir un valor en algún momento futuro.  Un promesa tiene tres estados posibles, resulta, rechazada o pendiente. [3] En otras palabras, si todo funciona adecuadamente, una promesa garantiza devolver un resultado en algun instante próximo después de ser ejecutada. 
								</p>

								<h5>
									¿Cómo funcionan async y await?
								</h5>
								<p>
									Es un patrón que permite estructurar una función asíncrona de tal manera que se puede implementar como una función síncrona. [4]
								</p>



								<h5>
									Referencias.
								</h5>
								<p>
									<ul>
										<li>
											[1] https://www.w3schools.com/xml/ajax_intro.asp
										</li>
										<li>
											[2] https://dzone.com/articles/top-javascript-libraries-for-making-ajax-calls
										</li>
										<li>
											[3] https://medium.com/javascript-scene/master-the-javascript-interview-what-is-a-promise-27fc71e77261
										</li>
										<li>
											[4] https://javascript.info/async-await
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