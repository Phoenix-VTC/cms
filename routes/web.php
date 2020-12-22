<?php

use Illuminate\Routing\Router;

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

/** @var Router $router */
$router
    ->get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

$router
    ->get('/{locale}/{slug}', [\App\Http\Controllers\PageController::class, 'showPage'])
    ->name('page.show');

$router
    ->get('/{locale}/team/{slug}', [\App\Http\Controllers\EmployeeController::class, 'showPage'])
    ->name('employee.show');
