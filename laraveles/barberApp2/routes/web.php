    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\MainController;
    use App\Http\Controllers\PeinadoController;

    //main controller
    Route::get('/',[MainController::class,'main'])->name('main');
    Route::get('about',[MainController::class,'about'])->name('about');

    ///7 rutas peinado controller
    Route::get('peinado', [PeinadoController::class,'index'])->name('peinado.index');
    Route::get('peinado/create',[PeinadoController::class,'create'])->name('peinado.create');
    Route::post('peinado',[PeinadoController::class,'store'])->name('peinado.store');
    Route::get('peinado/{peinado}',[PeinadoController::class,'show'])->name('peinado.show');
    Route::get('peinado/{peinado}/edit',[PeinadoController::class,'edit'])->name('peinado.edit');
    Route::put('peinado/{peinado}',[PeinadoController::class,'update'])->name('peinado.update');
    Route::delete('peinado/{peinado}',[PeinadoController::class,'destroy'])->name('peinado.destroy');
