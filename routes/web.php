<?php

use App\Http\Controllers\DisplayUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FichierController;
use App\Http\Controllers\StatModelController;

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
    return view('AfficheUser');
});

Route::get('/upload',[FichierController::class, "Upload"])->name(name:'upload');
Route::post('/upload',[FichierController::class, "UploadPost"])->name(name:'upload.post');

Route::get('/stats', [StatModelController::class, 'GetCountStats']);

// Routes Fiche Réalisation
// Afficher mes User
Route::get('/player',[DisplayUserController::class, "GetPlayerParam"])->name(name:'player');

// Modification de mes User ( photo de profil )
Route::post('/players/{id}/update-photo', [DisplayUserController::class, 'updateProfilePhoto'])->name('updateProfilePhoto');

