app.controller("controller", function ($scope, $http) {
  $scope.primary = "teal-accent-1";
  $scope.secondary = "light-green-accent-1"
  $scope.tab_consult = true;
  $scope.tab_insert = false;
  $scope.showConsult = function () {
    $scope.tab_consult = true;
    $scope.tab_insert = false;
  };
  $scope.showInsert = function () {
    $scope.tab_consult = false;
    $scope.tab_insert = true;
  };

  //consultas
  $scope.consultar_incidentes = function () {
    $http.get("./model_incidentes_consult.php").then(function (response) {
      $scope.incidentes = response.data;
      console.log($scope.incidentes);
    });
  };
  $scope.consultar_incidentes();

  //agregar
  $scope.agregar_incidente = function () {
    if ($scope.lugar_seleccionado && $scope.tipo_incidente_seleccionado) {
      console.log($scope.lugar_seleccionado.lugar_id);
      console.log($scope.tipo_incidente_seleccionado.tipo_incidente_id);
      let data = [];
      data[0] = $scope.lugar_seleccionado.lugar_id;
      data[1] = $scope.tipo_incidente_seleccionado.tipo_incidente_id;
      let url = "./model_incidente_insert.php";
      $http.post(url, data).then(function (response) {
        $scope.consultar_incidentes();
      });
    } else {
      alert("Por favor seleccione un lugar y tipo de incidente");
    }
  };

  //menus
  initialize_menu = function (menu_nombre) {
    let data = [{
      menu: menu_nombre
    }];
    url = "./model_menu_qry.php";
    $http.post(url, data)
      .then(function (response) {
        switch (menu_nombre) {
          case "lugares_menu":
            $scope.lugares_menu = response.data;
            $scope.lugar_seleccionado;
            console.log($scope.lugares_menu);
            break;
          case "tipos_incidente_menu":
            $scope.tipos_incidente_menu = response.data;
            $scope.tipo_incidente_seleccionado;
            console.log($scope.tipos_incidente_menu);
            break;
          default:
            break;
        }
      });
  }
  initialize_menu("lugares_menu");
  initialize_menu("tipos_incidente_menu");
});