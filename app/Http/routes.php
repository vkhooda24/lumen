<?php

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

$app->get('/', function () use ($app) {
    return 'GPS Drive Rest APIs project';
});

$app->get('api/savegpsdata','GpsdataController@saveGpsdata');// http://gpsdrive.vk/api/savegpsdata?routename=ambtoknl&routebus=amb1001&lat=221.00&long=888.00

$app->get('api/getgpsdata','GpsdataController@getGpsData');//http://gpsdrive.vk/api/getgpsdata

$app->get('api/insert','GpsdataController@insertdata');

$app->get('api/deletegpsdata','GpsdataController@deleteGpsdata');//http://gpsdrive.vk/api/deletegpsdata?id=1

$app->get('api/updategpsdata/{id}','GpsdataController@updateGpsData');//http://gpsdrive.vk/api/updategpsdata/2?routename=chd%20to%20kkr&routebus=chd111
