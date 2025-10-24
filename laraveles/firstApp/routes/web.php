<?php
// En este archivo se definen las rutas web de la aplicación.

// Método estático 'get' de la clase 'Route' para definir rutas que responden a solicitudes HTTP GET.
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MessageController;


// main controller
Route::get('/', [MainController::class, 'index']);
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('template/tailwind', [FirstController::class,'tailwind'])->name('tailwind');


//message controller

Route::get('message', [MessageController::class, 'index'])->name('message.index');
Route::get('message/{id}', [MessageController::class, 'show'])->name('message.show');
Route::get('message/create', [MessageController::class, 'create'])->name('message.create');
Route::post('message', [MessageController::class, 'store'])->name('message.store');
Route::get('message/{id}/edit', [MessageController::class, 'edit'])->name('message.edit');
Route::put('message/{id}', [MessageController::class, 'update'])->name('message.update');
Route::delete('message/{id}', [MessageController::class, 'destroy'])->name('message.destroy');  



/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::get('first', [FirstController::class, 'firstMethod']);
Route::get('second', [FirstController::class, 'secondMethod']);
Route::get('third', [FirstController::class, 'thirdMethod']);
*/



Route::get('alternativa', function () {
    return view('welcome');
});

Route::get('esto/es/una/ruta/logica', function () {
    return view('welcome');
});

Route::get('hola/{x}?', function () {
    return view('welcome');
});
