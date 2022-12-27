<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    $coins=[];
    $response = json_decode(file_get_contents(
        'https://www.dolarsi.com/api/api.php?type=valoresprincipales'), true);
    foreach ($response as $key => $value) {
        if($value["casa"]["nombre"] == "Dolar Oficial" || $value["casa"]["nombre"] == "Dolar Blue"){
            $coins[] = $value["casa"];
        }
    }
    
    return view('index', compact("coins"));
});
