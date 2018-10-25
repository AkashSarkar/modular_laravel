<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('get-all-route', function () {

    $getRouteCollection = Route::getRoutes(); //get and returns all returns route collection
    $routes = [];
    $routes['ROOT_URL'] = url('');
    foreach ($getRouteCollection as $route) {

        $routes[$route->getName()] = $route->uri();
    }


    $script = "export default";
    $script .= json_encode($routes, JSON_PRETTY_PRINT);
    $fileName = "../resources/assets/js/routes.js";
    file_put_contents($fileName, $script);
    dd($routes);

});
