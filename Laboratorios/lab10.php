<?php
include '_head.html';
include '_sidebar.html';
?>

<div id="main">
	

	<!-- TOP NAVBAR -->
	<nav class="navbar navbar-expand-lg bg-primary border-bottom" id="navbar">
		<!-- Toogle Sidebar Button -->
		<button class="btn btn-green" onclick="openSideBar()"><i class="material-icons text-primary">menu</i></button> 
		<!-- End Toogle Sidebar Button -->
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link " id="forma-tab" data-toggle="tab" href="#forma" role="tab" aria-controls="forma" aria-selected="false">Forma</a>
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

			<!-- Forma -->
			<div class="tab-pane active " id="forma" role="tabpanel" aria-labelledby="forma-tab">
				<!-- Container -->
				<div class="container">
					
					<form method="POST" action="choosegames.php" onsubmit="return validateform(this);">
						
						<div class="form-group">
							<label for="nombre"><h5>Name</h5></label><br>
							<input type="text" name="name" placeholder="Alberto Plata" size="25" maxlength="30" required>
						</div>

						<div class="form-group">
							<label for="nintendo playstation"><h5>Choose a company</h5></label><br>


							<input type="radio" id="company1" name="company" value="nintendo" autocomplete="off">
							<label for="nintendo" required>Nintendo</label><br>

							<input type="radio" id="company2" name="company" value="playstation" autocomplete="off">
							<label for="playstation" required>PlayStation</label><br>

						</div>
						<div class="form-group">
							<label for="openworld hackandslash"><h5>Choose your favorite game types</h5></label><br>

							<input type="checkbox" id="type1" name="type1" value="openworld" autocomplete="off">
							<label for="openworld">Open World</label><br>

							<input type="checkbox" id="type1" name="type2" value="hackandslash" autocomplete="off">
							<label for="hackandslash">Hack and Slash</label><br>

							
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>


				</div>
				<!-- End Container -->
			</div>
			<!-- End Promedio -->



			<!-- Preguntas -->
			<div class="tab-pane" id="preguntas" role="tabpanel" aria-labelledby="preguntas-tab">
				<!-- Container -->
				<div class="container">
					<form>
						<div class="form-group">
							<h5>
								¿Por qué es una buena práctica separar el controlador de la vista? 
							</h5>
							<p>
								Para tratar de manera separada los cambios a la base de datos y codigo de backend y dejar intacta la interfaz.  
								[1]
							</p>

							<h5>
								Aparte de los arreglos $_POST y $_GET, ¿qué otros arreglos están predefinidos en php y cuál es su función?
							</h5>

							<p>
								<ul>
									<li>
										HEAD: igual que GET pero sin el cuerpo de respuesta.
									</li>
									<li>
										PUT: eviar datos al servidor para actualizar recursos. 
									</li>

								</ul>
								[2]
							</p>

							<h5>
								Explora las funciones de php, y describe 2 que no hayas visto en otro lenguaje y que llamen tu atención.
							</h5>

							<p>
								<ul>
									<li>
										mysqli_connect: abrir una nueva conexión con el servidor MySQL.
									</li>
									<li>
										 mysqli_execute: ejecuta un Query preparado. 
									</li>
								</ul>
								[3]
							</p>

							<h5>
								¿Qué es XSS y cómo se puede prevenir?
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
										[1] https://codigofacilito.com/articulos/mvc-model-view-controller-explicado
									</li>
									<li>
										[2] https://www.w3schools.com/tags/ref_httpmethods.asp
									</li>
									<li>
										[3] https://www.php.net/manual/en/functions.internal.php
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

<?php
?>
<script src="resources/js/validateform.js"></script>
<?php
include '_footer.html';
?>