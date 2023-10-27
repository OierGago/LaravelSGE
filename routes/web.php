<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\IncidentStatusController;
use App\Http\Controllers\PriorityController;
use app\Http\Controllers\Auth\RegisterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/incidents');
    //return view('welcome');
});

Route::resources([
    'incidents' => IncidentsController::class,
]);

Route::middleware(['auth'])->group(function () {
    Route::resources([
        'departments' => DepartmentsController::class,
        ]);
    });



Route::resources([
    'categories' => CategoriesController::class,
]);
Route::resources([
    'comments' => CommentsController::class,
]);
Route::resources([
    'incident_statuses' => IncidentStatusController::class,
]);

Route::resources([
    'priorities' => PriorityController::class,
]);

Route::resources([
    'users' => UsersController::class,
]);

// Route::resources([
//     'register' => RegisterController::class,
// ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
