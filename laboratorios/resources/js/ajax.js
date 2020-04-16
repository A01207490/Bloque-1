function getRequestObject() {
    // Asynchronous objec created, handles browser DOM differences

    if (window.XMLHttpRequest) {
        // Mozilla, Opera, Safari, Chrome IE 7+
        return (new XMLHttpRequest());
    } else if (window.ActiveXObject) {
        // IE 6-
        return (new ActiveXObject("Microsoft.XMLHTTP"));
    } else {
        // Non AJAX browsers
        return (null);
    }
}

function refresh() {
    request = getRequestObject();
    if (request != null) {
        var userInput = document.getElementById('userInput');
        var url = 'ssajax.php?pattern=' + userInput.value;
        request.open('GET', url, true);
        request.onreadystatechange =
            function () {
                if ((request.readyState == 4)) {
                    // Asynchronous response has arrived
                    var ajaxResponse = document.getElementById('ajaxResponse');
                    ajaxResponse.innerHTML = request.responseText;
                    ajaxResponse.style.visibility = "visible";
                }
            };
        request.send(null);
    }
}

function filtrar_juegos() {
    request = getRequestObject();
    if (request != null) {
        let juego_genero = document.getElementById('juego_genero').value;
        let juego_estudio = document.getElementById('juego_estudio').value;
        var url = 'controllers/juego_filtrar.php?juego_genero=' + juego_genero + '&juego_estudio=' + juego_estudio;
        request.open('GET', url, true);
        request.onreadystatechange =
            function () {
                if ((request.readyState == 4)) {
                    // Asynchronous response has arrived
                    /*
                    var ajaxResponse = document.getElementById('juegos');
                    ajaxResponse.innerHTML = request.responseText;
                    ajaxResponse.style.visibility = "visible";*/
                    document.getElementById('juegos').innerHTML = request.response;
                }
            };
        request.send(null);
    }
}

document.getElementById('filtrar').onclick = filtrar_juegos;