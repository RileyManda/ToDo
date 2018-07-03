<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require "../vendor/autoload.php";
require '../resource/listresource.php';
$listResource = new resource\ListResource();

$app = new \Slim\App;

$container =$app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("../templates/");
$app->get('/', function (Request $request, Response $response) {
$response = $this->view->render($response, "index.html");
    return $response;
});
$app->get('/list_item(/(:id)(/))', function($id = null) use ($listResource) {
    echo $listResource->get($id);
});
$app->post('/list_item', function() use ($listResource) {
    echo $listResource->post();
});

$app->put('/list_item/:id', function($id = null) use ($listResource) {
    echo $listResource->put($id);
});

$app->delete('/list_item/:id', function($id = null) use ($listResource) {
    echo $listResource->delete($id);
});

$app->run();
