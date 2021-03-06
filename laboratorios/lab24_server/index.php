<?php
header("Access-Control-Allow-Origin: http://localhost");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: Content-Type, Authorization");

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require '../vendor/autoload.php';
require_once("../util.php");

$app = AppFactory::create();

$juegos = array(
    array('name' => 'Metroid Prime', 'publisher' => 'Nintendo'),
    array('name' => 'Super Mario Galaxy', 'publisher' => 'Nintendo'),
    array('name' => 'The Legend of Zelda Skyward Sword', 'publisher' => 'Nintendo'),
);

function consult_games()
{
    //connect to the database
    $con = connect_db("laboratorios");
    // check connection 
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $query = ("	SELECT *
				FROM juegos");
    $result = mysqli_query($con, $query);
    $response = [];
    $i = 0;
    while ($rs = mysqli_fetch_assoc($result)) {
        $response[$i] = $rs;
        $i++;
    }
    return $response;
}


//$juegos = consult_games();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("General Emoji!");
    return $response;
});



$app->get('/juegos', function (Request $request, Response $response, $args) use ($juegos) {
    $payload = json_encode($juegos);
    $response->getBody()->write($payload);
    return $response
        ->withHeader('Content-Type', 'application/json');
});

$app->run();
