<html>

<?php
session_start();
require_once("./util.php");
?>

<head>

	<?php include '_head.html'; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<title><?php echo basename(__DIR__); ?></title>
	<script>
		var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope, $http) {

			
			$http.get('http://localhost:8002/juegos').then(function(response) {
				$scope.juegos = response.data;
				console.log(response.data);				
			});



		});
	</script>

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

				<li class="nav-item ">
					<a class="nav-link" id="consultar-tab" data-toggle="tab" href="#consultar" role="tab" aria-controls="consultar" aria-selected="false">Juegos</a>
				</li>

				<li class="nav-item active">
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
					<div class="container" ng-app="myApp" ng-controller="myCtrl">



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
														<th>Estudio</th>
													</tr>
												</thead>
												<tbody ng-repeat="juego in juegos">
													<th>{{juego.name}}</th>
													<th>{{juego.publisher}}</th>

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

					</div>
					<!-- End Container -->

				</div>
				<!-- End consultar -->

				<!--insertar -->
				<div class="tab-pane-active" id="insertar" role="tabpanel" aria-labelledby="insertar-tab">



					<!--row eliminar-->
					<div class="row p-1">
						<div class="col-sm ">
							<div class="container  d-flex justify-content-center align-items-center">


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
									¿A qué se refiere la descentralización de servicios web?
								</h5>

								<p>
									Red donde no existe un único nodo central, sino que existe un centro colectivo con diversos puertos de conexión. De manera tal, que si uno de los «nodos reguladores» se desconecta, ninguno o pocos nodos restantes del conjunto de la red pierdan conectividad.
									[1]
								</p>


								<h5>
									¿Cómo puede implementarse un entorno con servicios web disponibles aún cuando falle un servidor?

								</h5>
								<p>
									Teniendo redundancia con otros sevidores.
								</p>

								<h5>
									Referencias.
								</h5>
								<p>
									<ul>
										<li>
											[1] https://blog.desdelinux.net/descentralizar-internet-redes-descentralizadas-servidores-autonomos/
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