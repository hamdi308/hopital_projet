<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth','verified');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('user.home');
})->name('dashboard');
Route::get('/add_doctor_view',[AdminController::class, 'addview']);
Route::post('/ajouter_medecin',[AdminController::class, 'upload']);
Route::post('/appointement',[HomeController::class, 'appointement']);
Route::get('/mes_avis',[HomeController::class, 'mesavis']);
Route::get('/supprimer_avis/{id}',[HomeController::class, 'supprimerAvis']);
Route::get('/affiche_avis',[AdminController::class, 'afficheAvis']);
Route::get('/modifier_status/{id}',[AdminController::class, 'approuverStatus']);
Route::get('/rejecter_status/{id}',[AdminController::class, 'rejecterStatus']);
Route::get('/tous_medecins',[AdminController::class, 'afficheMedecins']);
Route::get('/update_medecin/{id}',[AdminController::class, 'updateview']);
Route::post('/update_medecin/{id}',[AdminController::class, 'updateMedecins']);
Route::get('/supprimer_medecin/{id}',[AdminController::class, 'supprimerMedecins']);
Route::get('/profil_med/{id}',[AdminController::class, 'afficheProfileMedecins']);
Route::get('/envoyer_email/{id}',[AdminController::class, 'envoyerEmailView']);
Route::post('/envoyer_email/{id}',[AdminController::class, 'envoyerEmail']);












