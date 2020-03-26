<html>

<head>

  <?php include '_head.html'; ?>
  <title><?php echo basename(__DIR__); ?></title>
</head>

<body>
  <?php include '_sidebar.html'; ?>
	<!-- MAIN -->
	<div id="main">
		<!--------------------------------------------------------------------------------------->

		<!-- TOP NAVBAR -->
		<nav class="navbar navbar-expand-lg bg-primary border-bottom" id="navbar">
			<!-- Toogle Sidebar Button -->
			<button class="btn btn-green" onclick="openSideBar()"><i class="material-icons text-primary">menu</i></button> 
			<!-- End Toogle Sidebar Button -->
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="preguntas-tab" data-toggle="tab" href="#preguntas" role="tab" aria-controls="preguntas" aria-selected="false">Preguntas</a>
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

				

				<!-- Preguntas -->
				<div class="tab-pane active" id="preguntas" role="tabpanel" aria-labelledby="preguntas-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<h5>
									Describe Material design.
								</h5>
								<p>
									Material is an adaptable system of guidelines, components, and tools that support the best practices of user interface design. Backed by open-source code, Material streamlines collaboration between designers and developers, and helps teams quickly build beautiful products. [1]
								</p>

								
								<h5>
									Referencias.
								</h5>
								<p>
									<ul>
										<li>
											[1] https://material.io/
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

		<!--------------------------------------------------------------------------------------->

		<!-- Footer -->

		<footer class="fixed-bottom" id="myFooter">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#" id="dir"></a></li>
					<li class="breadcrumb-item set-text" aria-current="page"><a href="#"></a></li>
				</ol>
			</nav>
		</footer>

		<!-- End Footer -->

		<!--------------------------------------------------------------------------------------->
	</div>
	<!-- END MAIN -->

	</div>
	<!-- END MAIN -->

	<?php include '_footer.html'; ?>
</body>