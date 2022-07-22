<?php 
require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory; 

$app = AppFactory::create();

// get => Hello World in the source page
$app->get('/', function(Request $request, Response $response, $args){ // source page 
    $response->getBody()->write("Hello World");
    return $response;

}); 


$app->get('/fruits', function(Request $request, Response $response, $args){ // fruits page 
    // could use a database
    $fruits = [
        '1' => 'Banana',
        '2' => 'Apple',
        '3' => 'Orange' 
    ];
    $response->getBody()->write(json_encode($fruits)); // returning all fruits in a json 
    return $response->withHeader('Content-type', 'application/json'); // informing that is a json
}); 


// search a fruit with id 
$app->get('/fruits/{id}', function(Request $request, Response $response, $args){ // fruits page 
    // could use a database
    $fruits = [
        '1' => 'Banana',
        '2' => 'Apple',
        '3' => 'Orange' 
    ];
    $fruit[$args['id']] = $fruits[$args['id']]; // get the position by id 
    $response->getBody()->write(json_encode($fruit)); // returning all fruits in a json 
    return $response->withHeader('Content-type', 'application/json'); // informing that is a json
}); 

$app->run();

?>