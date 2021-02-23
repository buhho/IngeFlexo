<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FotosController;

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

Route::get('/', [PageController::class, 'index'])->name('inicio');
Route::get('fotos', [FotosController::class, 'galeria'])->name('imagen');
Route::get('blog', [PageController::class, 'blog'])->name('notcias');
Route::get('galeria', [Controller::class, 'nosotros'])->name('nosotros');
Route::get('galeria/{numero?}', [FotoSController::class, 'mostrar']);

Route::get('hello', function() {
    return 'Hello World.';
});

/*
Route::get('galeria/{numero?}', function($numero = 'Hey, no pasaste ningun numero de foto!!!') {
    return 'Esta es la foto numero: '.$numero;
})->where('numero', '[0-9]+');

Route::get('fotos', function() {
    return view('fotos', [ 'numero' => 123 ]);
})->name('imagen');
*/

Route::get('blog', function() {
    return view('blog');
})->name('noticias');

Route::get('nosotros/{nombre?}', function($nombre = null) {

    $equipo = ['Juanito', 'Pedrito', 'Menganito'];

    return view('nosotros', compact('equipo', 'nombre') );
})->name('nosotros');

# route::get('/', 'WelcomeController@index');

?>
