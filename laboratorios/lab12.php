<html>

<?php session_start(); ?>

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
					<a class="nav-link" id="sesion-tab" data-toggle="tab" href="#sesion" role="tab" aria-controls="sesion" aria-selected="false">Iniciar sesion</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Updload Image</a>
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
				<!-- Iniciar sesion -->
				<div class="tab-pane active" id="sesion" role="tabpanel" aria-labelledby="sesion-tab">
					<!-- Container -->
					<div class="container d-flex justify-content-between">
						<div class="flex-item">
							<?php
							require_once("util.php");
							//Clean the input, username and password.
							if (isset($_POST["user"])) {
								$_POST["user"] = clean_input($_POST["user"]);
							}
							if (isset($_POST["password"])) {
								$_POST["password"] = clean_input($_POST["password"]);
							}

							if (isset($_POST["user"]) && isset($_POST["password"])) {
								if ($_POST["user"] == "beto" && $_POST["password"] == "samus") {
									// Username and password are correct.
									// Set session variables.
									$_SESSION["user"] = $_POST["user"];
									$_SESSION["password"] = $_POST["password"];
									echo 'Welcome ' . $_SESSION['user'];
								} else if ($_POST["user"] != "beto" && $_POST["password"] != "samus") {
									echo 'Incorrect user and password';
									include("partials/_login.html");
								} else if ($_POST["user"] != "beto") {
									echo 'Incorrect user';
									include("partials/_login.html");
								} else if ($_POST["password"] != "samus") {
									echo 'Incorrect password';
									include("partials/_login.html");
								}
							} else {
								include("partials/_login.html");
							}
							?>
						</div>
						<div class="flex-item">
							<form action="./controllers/logout.php" method="POST">
								<button type="submit" class="btn btn-primary">Log out</button>
							</form>
						</div>
					</div>
					<!-- End Container -->
				</div>
				<!-- End Upload -->


				<!-- Upload -->
				<div class="tab-pane" id="upload" role="tabpanel" aria-labelledby="upload-tab">
					<!-- Container -->
					<div class="container">
						<?php
						//Clean the input, username and password.
						if (isset($_SESSION["user"])) {
							if ($_SESSION["user"] == "beto") {
								echo 'Welcome ' . $_SESSION['user'];
						?>
								<form action="upload.php" method="post" enctype="multipart/form-data">
									Select image to upload:
									<input type="file" name="fileToUpload" id="fileToUpload">
									<br>
									<input type="submit" value="Submit" name="submit">
								</form>
						<?php

							} else {
								echo 'Error';
							}
						} else {
							echo 'Please log in to upload a file';
						}
						?>




					</div>
					<!-- End Container -->
				</div>
				<!-- End Upload -->



				<!-- Preguntas -->
				<div class="tab-pane" id="preguntas" role="tabpanel" aria-labelledby="preguntas-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<h5>
									¿Por qué es importante hacer un session_unset() y luego un session_destroy()?
								</h5>
								<p>
									Para primero remover todas las variables de sesion y después destruir la sesión. [1]
								</p>

								<h5>
									¿Cuál es la diferencia entre una variable de sesión y una cookie?
								</h5>

								<p>
									Las cookies solamente se alamcenand del lado del cliente, mientras que las variables de sesion se guardan tanto del lado del cliente como del servidor. [2]

								</p>

								<h5>
									¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?
								</h5>

								<p>
									Revisando si el archivo ya existe con la función file_exists() [3]
								</p>

								<h5>
									¿Qué es CSRF y cómo puede prevenirse?
								</h5>

								<p>
									Es una vulnerabilidad web que permite a un atacante comprometer las interacciones que tiene el usuario con una aplicación, es decir, consiste en ejecutar códigos JavaScript maliciosos para acceder a información de un usuario víctima o incluso realizar acciones que el usuario tiene permitidas en la aplicación. Para prevenirlo, se puede: filtar el input cuando arriba, codificar datos cuando son enviados, usar headers apropiados o utilizar Content Security Policy. [4]
								</p>

								<h5>
									Referencias.
								</h5>
								<p>
									<ul>
										<li>
											[1] https://www.w3schools.com/php/php_sessions.asp
										</li>
										<li>
											[2] https://www.tutorialspoint.com/What-is-the-difference-between-session-and-cookies
										</li>
										<li>
											[3] https://www.w3schools.com/php/php_file_upload.asp
										</li>
										<li>
											[4] https://portswigger.net/web-security/cross-site-scripting
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