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
				<a class="nav-link " id="promedio-tab" data-toggle="tab" href="#promedio" role="tab" aria-controls="promedio" aria-selected="false">Promedio</a>
			</li>

			<li class="nav-item active">
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

			<!-- Promedio -->
			<div class="tab-pane " id="promedio" role="tabpanel" aria-labelledby="promedio-tab">
				<!-- Container -->
				<div class="container">
					<?php


					function average(&$arr){
						$average=0;
						for ($i=0; $i < sizeof($arr); $i++) { 
							$average+=$arr[$i];
						}
						return $average/sizeof($arr);
					}
					function median(&$arr){
						sort($arr);
						if (sizeof($arr) % 2 == 1){
							return $arr[sizeof($arr) / 2];
						}else{
							return 0.5 * ($arr[sizeof($arr) / 2 - 1] + $arr[sizeof($arr) / 2]);
						}
					}
					function showDispersion(&$arr){
						$average = average($arr);
						$median = median($arr);
						//HTML
						?>
						<?php echo "Array - ".implode(" | ",$arr)."<br>"; ?>
						<ul>
							<li>
								<?php echo "Average - ".$average."<br>"; ?>
							rsort($arr);			</li>
							<li>
								<?php echo "Median - ".$median."<br>"; ?>
							</li>
							<li>
								<?php sort($arr); echo "Ascending sort - ".implode(" | ", $arr)."<br>"; ?>
							</li>
							<li>
								<?php rsort($arr); echo "Descending sort - ".implode(" | ", $arr)."<br>"; ?>
							</li>
						</ul>
						<?php
						//End HTML
					}
					function printNTable($n){
						?>
						<table class='table table-dark table-hover'>
							<thead>
								<th>
									n
								</th>
								<th>
									n^2
								</th>
								<th>
									n^3
								</th>
							</thead>
							<?php
							$j = 1;
							for($i=0; $i < $n; $i++){
								?> <tr> <?php
								$cont = 1;
								while($j<=3){
									$cont += $i*$cont;
									?> <td> <?php echo $cont; ?> </td> <?php
									$j = $j + 1;
								}
								?> </tr> <?php
								$j = 1;
							}
							?> </table> <?php
						}

						$arr1 = array(10,80,90,85,80);
						$arr2 = array(70,80,90,85,75);
						showDispersion($arr1);
						printNTable(5);
						?>
					</div>
					<!-- End Container -->
				</div>
				<!-- End Promedio -->

				<!-- Upload -->
				<div class="tab-pane active" id="upload" role="tabpanel" aria-labelledby="upload-tab">
					<!-- Container -->
					<div class="container">
						
						<form action="upload.php" method="post" enctype="multipart/form-data">
							Select image to upload:
							<input type="file" name="fileToUpload" id="fileToUpload">
							<br>
							<input type="submit" value="Submit" name="submit">
						</form>

						

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
	include '_footer.html';
	?>