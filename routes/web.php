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
    return 'Radiografia Migrations: Kanto (v0.0.1), based on ' . $router->app->version();
});

/* Testing CAS */
/*$router->options('api/login/serviceValidate', function (Illuminate\Http\Request $request) {
    return response('', 200, [
        'Access-Control-Allow-Origin' =>' *',
        'Access-Control-Allow-Methods'=>' POST, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Headers'=>'X-Requested-With, content-type',
    ]);
});

$router->get('api/login/serviceValidate', function (Illuminate\Http\Request $request) {
    return '<cas:serviceResponse xmlns:cas=\'http://www.yale.edu/tp/cas\'>
	<cas:authenticationSuccess>
		<cas:user>fafarfan</cas:user>


	</cas:authenticationSuccess>
</cas:serviceResponse>';
});*/
