<html>

<head>

  <?php include '_head.html'; ?>
  <title><?php echo basename(__DIR__); ?></title>
</head>

<body>
  <?php include '_sidebar.html'; ?>
  <!-- Page Content -->
  <div id="main">
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary border-bottom" id="navbar">
      <!-- Toogle Sidebar Button -->
      <button class="btn btn-green" onclick="openSideBar()"><i class="material-icons text-primary">menu</i></button>
      <!-- End Toogle Sidebar Button -->
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="cuestionario-tab" data-toggle="tab" href="#cuestionario" role="tab" aria-controls="cuestionario" aria-selected="false">Preguntas</a>
        </li>
      </ul>
      <!-- End Nav tabs -->
    </nav>
    <!-- End Top Navbar -->

    <!--------------------------------------------------------------------------------------->

    <div class="container bg-info content">
      <div class="tab-content">

        <!--------------------------------------------------------------------------------------->
        <div class="tab-pane active" id="cuestionario" role="tabpanel" aria-labelledby="cuestionario-tab">
          <h5>¿Qué es entonces una base de datos - DB?</h5>
          <p>
            Una base de datos es una colección organizada de información o datos, almacenados de manera electrónica en un sistema computacional. Una base de datos es usualmente controlada por un DBMS (Database Management System). Juntos, la base de datos, el DBSM, y las aplicaciones asociadas, se les conoce como sistema de base de datos, o simplemente base de datos.
            En la actualidad, los datos almacenados en las bases de datos se modelan típicamente en renglones y columnas en una serie de tablas para hacer más eficiente el procesamiento de los datos, ya que de esta manera, es mas fácil el acceso, manejo, modificación, actualización, control y organización de los datos. [1]
          </p>
          <br>
          <h5>¿En qué casos es conveniente usar bases de datos?</h5>
          <p>
            En general, en conveniente implementar una base de datos en organizaciones o empresas donde se manejan un gran volumen de datos en archivos interrelacionados, cuya consulta es requerida por usuarios o aplicaciones.
          </p>
          <br>
          <h5>¿Qué es un sistema de gestión de base de datos - DBMS?</h5>
          <p>
            Un DBSM (Database Management System) funciona como una interfaz entre la base de datos y los usuarios o aplicaciones, permitiendo consultar, actualizar, y gestionar como se organizan y optimizan los datos almacenados. Un DBSM también facilita la administración y control de las bases de datos, habilitando una variedad de operaciones administrativas como monitoreo de rendimiento, afinación, respaldo y recuperación. [2]
          </p>
          <br>
          <h5>Enlista y explica las funciones/responsabilidades que tienen los DBMS.</h5>
          <p>
            <ul>
              <li>Simplicar y facilitar el acceso a los datos.</li>
              <li>Contar con estructuras de datos eficientes para brindar un tiempo de respuesta optimo de acuerdo a los atributos de calidad establecidos de la empresa.</li>
              <li>Traducción de sentencias DML a comandos de sistema para la gestión de datos. </li>
              <li>Monitoreo de datos de acuerdo a las reglas de negocio de la organización, para restringir y notificar anomalías en los datos almacenados. </li>
              <li>Enforzar los requisitos de seguridad para regular los permisos de acceso que tienen los diversos usuarios del sistema. </li>
              <li>Restauración de datos ante fallas del sistema.</li>
              <li>Controlar la interacción entre los usuarios concurrentes.</li>

            </ul>
          </p>
          <br>
          <h5>Ejemplifica y justifica en que proyecto de los que has realizado hubiera sido conveniente utilizar una base de datos.</h5>
          <p>
            Hasta ahora, no he realizado ningún proyecto en el que hubiera sido conveniente utilizar una base de datos, ya que no he manejado grandes volúmenes de datos.
          </p>
          <br>

          <h5>Referencias</h5>
          <p>
            <ul>
              <li>[1] https://searchsqlserver.techtarget.com/definition/database</li>
              <li>[2] https://www.oracle.com/database/what-is-database.html</li>
            </ul>
          </p>
          <br>


        </div>
        <!--------------------------------------------------------------------------------------->
      </div>

    </div>
  </div>

  <?php include '_footer.html'; ?>
</body>


</html>