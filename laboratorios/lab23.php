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

				<li class="nav-item ">
					<a class="nav-link" id="consultar-tab" data-toggle="tab" href="#consultar" role="tab" aria-controls="consultar" aria-selected="false">Twitter</a>
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
					<div class="container">



						<!--row eliminar-->
						<div class="row p-1 ">
							<div class="col-sm ">
								<div class="container d-flex justify-content-center align-items-center">

									<div class="card w-100 d-flex bg-secondary">
										<!--Card Header-->
										<div class="card-header bg-secondary pt-4">
											<h4 class="card-title text-center ">Twitter</h4>




										</div>
										<!--End Card Header-->
										<!--Card Body-->
										<div class="card-body">



											<blockquote class="twitter-tweet">
												<p lang="en" dir="ltr">&quot;Silver cooler destroys golden frieza&quot; inspired by moro&#39;s famous pannel<br>Comission for my guy <a href="https://twitter.com/kakaro_Tow?ref_src=twsrc%5Etfw">@kakaro_Tow</a> <a href="https://t.co/OuYqm7ZV6J">pic.twitter.com/OuYqm7ZV6J</a></p>&mdash; MERIMO only 🇫🇷(comissions open) (@Merik_MERIMO) <a href="https://twitter.com/Merik_MERIMO/status/1251917909821136896?ref_src=twsrc%5Etfw">April 19, 2020</a>
											</blockquote>
											<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



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
									¿Qué ventajas y desventajas tiene la integración de tus aplicaciones web con servicios web desarrollados por terceros?
								</h5>
								<p>
									Desventajas
									<ul>
										<li>
											Debido a que las APIS por naturaleza también son un "single entry point", se convierten en puertas suscecptibles a ataques de seguridad, cuando una API S se ve comprometida, todas las demás aplicaciones y sistemas se vulven vulnerables. [1]
										</li>
									</ul>
								</p>
								<p>
									Desventajas
									<ul>
										<li>
											Automatización: a traveś del uso de APIS, agencias pueden actulizar flujos de trabajo para hacerlos más rápidos y productivos.
										</li>
										<li>
											Aplicación: debido a que pueden acceder componentes app, la entrega de servicios e información es más flexible.
										</li>
										<li>
											Alcance: se puede crear una capa de aplicación que puede ser usada para distribuir información y servicios a nuevas audiencias, las cuales se pueden personalizar para crear experiencias de usuario a medida.
										</li>
										[2]
									</ul>
								</p>





								<h5>
									Referencias.
								</h5>
								<p>
									<ul>
										<li>
											[1] https://openvpn.net/advantages-and-disadvantages-of-api-for-business/
										</li>
										<li>
											[2] https://bbvaopen4u.com/en/actualidad/8-advantages-apis-developers
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

	<script type="text/javascript">
		// Client ID and API key from the Developer Console
		var CLIENT_ID = 'dcWphFnL60hLcwDyiRjTvYHT';
		var API_KEY = 'AIzaSyCLPePH_fVp0hs6FAdvYza3rcZ39NyeRZc';

		// Array of API discovery doc URLs for APIs used by the quickstart
		var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];

		// Authorization scopes required by the API; multiple scopes can be
		// included, separated by spaces.
		var SCOPES = "https://www.googleapis.com/auth/calendar.readonly";

		var authorizeButton = document.getElementById('authorize_button');
		var signoutButton = document.getElementById('signout_button');

		/**
		 *  On load, called to load the auth2 library and API client library.
		 */
		function handleClientLoad() {
			gapi.load('client:auth2', initClient);
		}

		/**
		 *  Initializes the API client library and sets up sign-in state
		 *  listeners.
		 */
		function initClient() {
			gapi.client.init({
				apiKey: API_KEY,
				clientId: CLIENT_ID,
				discoveryDocs: DISCOVERY_DOCS,
				scope: SCOPES
			}).then(function() {
				// Listen for sign-in state changes.
				gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

				// Handle the initial sign-in state.
				updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
				authorizeButton.onclick = handleAuthClick;
				signoutButton.onclick = handleSignoutClick;
			}, function(error) {
				appendPre(JSON.stringify(error, null, 2));
			});
		}

		/**
		 *  Called when the signed in status changes, to update the UI
		 *  appropriately. After a sign-in, the API is called.
		 */
		function updateSigninStatus(isSignedIn) {
			if (isSignedIn) {
				authorizeButton.style.display = 'none';
				signoutButton.style.display = 'block';
				listUpcomingEvents();
			} else {
				authorizeButton.style.display = 'block';
				signoutButton.style.display = 'none';
			}
		}

		/**
		 *  Sign in the user upon button click.
		 */
		function handleAuthClick(event) {
			gapi.auth2.getAuthInstance().signIn();
		}

		/**
		 *  Sign out the user upon button click.
		 */
		function handleSignoutClick(event) {
			gapi.auth2.getAuthInstance().signOut();
		}

		/**
		 * Append a pre element to the body containing the given message
		 * as its text node. Used to display the results of the API call.
		 *
		 * @param {string} message Text to be placed in pre element.
		 */
		function appendPre(message) {
			var pre = document.getElementById('content');
			var textContent = document.createTextNode(message + '\n');
			pre.appendChild(textContent);
		}

		/**
		 * Print the summary and start datetime/date of the next ten events in
		 * the authorized user's calendar. If no events are found an
		 * appropriate message is printed.
		 */
		function listUpcomingEvents() {
			gapi.client.calendar.events.list({
				'calendarId': 'primary',
				'timeMin': (new Date()).toISOString(),
				'showDeleted': false,
				'singleEvents': true,
				'maxResults': 10,
				'orderBy': 'startTime'
			}).then(function(response) {
				var events = response.result.items;
				appendPre('Upcoming events:');

				if (events.length > 0) {
					for (i = 0; i < events.length; i++) {
						var event = events[i];
						var when = event.start.dateTime;
						if (!when) {
							when = event.start.date;
						}
						appendPre(event.summary + ' (' + when + ')')
					}
				} else {
					appendPre('No upcoming events found.');
				}
			});
		}
	</script>

	<script async defer src="https://apis.google.com/js/api.js" onload="this.onload=function(){};handleClientLoad()" onreadystatechange="if (this.readyState === 'complete') this.onload()">
	</script>
</body>


</html>