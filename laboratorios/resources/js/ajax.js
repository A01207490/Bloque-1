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

function filtrar_juegos_jquery() {
    console.log("Filtrar"); 
    console.log($("#juego_genero").val());
    //$.post manda la petición asíncrona por el método post. También existe $.get
    $.get("controllers/juego_filtrar.php", {
        juego_genero: $("#juego_genero").val(),
        juego_estudio: $("#juego_estudio").val()
    }).done(function (data) {
        $("#juegos").html(data);
    });
}

function anadir_juego_jquery() {
    console.log($("#juego_nombre_insertar").val());
    //$.post manda la petición asíncrona por el método post. También existe $.get
    $.post("controllers/juego_insertar.php", {
        juego_genero: $("#juego_genero_insertar").val(),
        juego_estudio: $("#juego_estudio_insertar").val(),
        juego_nombre: $("#juego_nombre_insertar").val(),
        juego_precio: $("#juego_precio_insertar").val()
    }).done(function (data) {
        $("#juego_insertar_mensaje").html("Juego agregado exitosamente");
    });
}


document.getElementById('filtrar_juegos_jquery').onclick = filtrar_juegos_jquery;
document.getElementById('anadir_juego_jquery').onclick = anadir_juego_jquery;



function filtrar_juegos() {
    console.log($("#juego_genero").val());
    request = getRequestObject();
    if (request != null) {
        let juego_genero = document.getElementById('juego_genero').value;
        let juego_estudio = document.getElementById('juego_estudio').value;
        var url = 'controllers/juego_filtrar.php?juego_genero=' + juego_genero + '&juego_estudio=' + juego_estudio;
        request.open('GET', url, true);
        request.onreadystatechange =
            function () {
                if ((request.readyState == 4)) {
                    document.getElementById('juegos').innerHTML = request.response;
                }
            };
        request.send(null);
    }
}

document.getElementById('filtrar').onclick = filtrar_juegos;