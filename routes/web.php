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
    return $router->app->version();
});
$router->get('/info' , function() use($router){
    return "version de la informacion abril 2021";
});

$router->group(
    [
        'prefix' => 'api/v1',

    ],
    function () use ($router) {
            //provincias
            $router->get('provinces','ProvinceController@index');
            $router->get('provinces/{code}','ProvinceController@show');
            //municipios
            $router->get('townships','TownshipController@index');
            $router->get('townships/{code}','TownshipController@show');
            $router->get('townships/province/{provinceId}','TownshipController@township');
            //formas organizativas
            $router->get('forms','OrganizationFormController@index');
            $router->get('forms/{code}','OrganizationFormController@show');
            //paises y regiones
            $router->get('countries','CountryController@index');
            $router->get('countries/{code}','CountryController@show');
            $router->get('countries/region/{regionId}','CountryController@countries');
            //uniones
            $router->get('unions','UnionController@index');
            $router->get('unions/active','UnionController@active');
            $router->get('unions/{code}','UnionController@show');
            //organismos
            $router->get('organisms','OrganismController@index');
            $router->get('organisms/active','OrganismController@active');
            $router->get('organisms/{code}','OrganismController@show');
            //instituciones
            $router->get('institutions', 'InstitutionController@index');
            $router->get('institutions/{code}', 'InstitutionController@show');

        }
);
