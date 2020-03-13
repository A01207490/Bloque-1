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
							<input type="text" class="" id="nombre" placeholder="Alberto Plata" size="25" maxlength="30" required>
						</div>

						<div class="form-group">
							<label for="nintendo playstation"><h5>Choose a company</h5></label><br>


							<input type="radio" id="company1" name="company1" value="nintendo" autocomplete="off">
							<label for="nintendo" required>Nintendo</label><br>

							<input type="radio" id="company2" name="company2" value="playstation" autocomplete="off">
							<label for="playstation" required>PlayStation</label><br>

						</div>
						<div class="form-group">
							<label for="openworld hackandslash"><h5>Choose your favorite game types</h5></label><br>

							<input type="checkbox" id="type1" name="type1" value="openworld" autocomplete="off">
							<label for="openworld">Open World</label><br>

							<input type="checkbox" id="type2" name="type2" value="hackandslash" autocomplete="off">
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
								¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.
							</h5>
							<p>
								Regresa información acerca de la configuración de PHP. 
								[1]
							</p>
							<ol>
								<li>
									Información: opciones de compilación, extensiones, versión de php, información del servidor y ambiente, ambiente PHP, versión del OS, paths, valores locales y master de opciones de configuración, headers HTTP y licencia PHP. [1]
								</li>
								<li>
									Usado comunmente para revisar configuración y variables predefinidas del sistema. [1]
								</li>
								<li>
									Valiosa herramienta para hacer "debugging", ya que contiene todos los datos EGPCS (Environment, GET, POST, Cookie, Server). [1]
								</li>
							</ol>

							<h5>
								¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción? 
							</h5>

							<p>
								Para que el servidor pueda ser accesado por cualquier visitante que se conecta por el internet, el sitio necesita ser público. Para lograr esto, en el menu principal ‘http://localhost’, hacer click en el link 'Apache' y abrir archivo llamado 'httpd.conf'. Remplazar las líneas:
								<ul>
									<li>
										Order Deny,Allow
									</li>
									<li>
										Deny from all
									</li>
									con
									<li>
										Order Allow,Deny
									</li>
									<li>
										Allow from all
									</li>
								</ul>
								[2]
								También se debe de dar acceso a todas las carpteas (644) y poner un index.html vacio, para que no puedan ver el contenido de los carpetas.
							</p>

							<h5>
								¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.
							</h5>

							<p>
								Cuando un servidor recibe una petición, envía las declaraciones html, pero las declaraciones PHP son procesadas por el software PHP antes de que sean enviandas al solicitante. Cuando estas declaraciones son procesadas, solo el output o cualquier cosa que se imprima a la pantalla es enviada por el servidor al navegador. Las declaraciones PHP que no producen ninguna salida a la pantalla, no se incluyen en el output que se envía al browser, por lo que el código PHP normalmente no es visto por el usuario. [3]
							</p>

							<h5>
								Referencias.
							</h5>
							<p>
								<ul>
									<li>
										[1] https://www.php.net/manual/en/function.phpinfo.php
									</li>
									<li>
										[2] https://www.dummies.com/programming/php/how-php-works/
									</li>
									<li>
										[3] https://www.dummies.com/programming/php/how-php-works/
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