function show_juegos() {
    fetch('http://localhost:8002/juegos')
        .then(response => response.json())
        .then(data => console.log(data));
}


document.getElementById('show').onclick = show_juegos;