    <?php

    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\PageController;
    use App\Http\Controllers\DonacionController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PrestamoController;
    use App\Http\Controllers\PrestamopController;
    use App\Http\Controllers\LibroController;

    Route::get('/librosp', [LibroController::class, 'index'])->name('librosp');
    Route::resource('libros', LibroController::class)->except(['index']);
    Route::resource('libros', LibroController::class);
    ///////////////////////////////////////////////////////////////////////////////////

    Route::get('/prestamo', [LibroController::class, 'prestamo'])->name('prestamo');
    

    Route::get('/prestamosl', [PrestamoController::class, 'index'])->name('prestamosl');

    Route::post('/prestamosl', [PrestamoController::class, 'store'])->name('prestamosl.store');
    Route::get('/prestamosl/{id}/edit', [PrestamoController::class, 'edit'])->name('prestamosl_edit');
    Route::put('/prestamosl/{id}', [PrestamoController::class, 'update'])->name('prestamosl.update');
    Route::delete('/prestamosl/{id}', [PrestamoController::class, 'destroy'])->name('prestamosl.destroy');

    Route::get('/prestamop', [PrestamopController::class, 'index'])->name('prestamop');
    Route::post('/prestamop/send', [PrestamopController::class, 'send'])->name('prestamop.send');

    //////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::resource('donaciones', DonacionController::class);
    Route::get('/donadores', [DonacionController::class, 'index'])->name('donadores');
    Route::post('/donadores', [DonacionController::class, 'store'])->name('donadores.store');
    Route::get('/donadores/get', [DonacionController::class, 'getDonaciones'])->name('donadores.get');


    Route::put('/prestamos/{id}/marcar-devuelto', [PrestamoController::class, 'marcarDevuelto'])->name('prestamos.marcar-devuelto');

    use App\Http\Controllers\DashboardController;

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');
    ///////////////////////////////////////////////////////////////////////////////
    use App\Http\Controllers\VoluntariadoController;

    Route::resource('voluntariado', VoluntariadoController::class);
    Route::post('/voluntariado/send', [VoluntariadoController::class, 'send'])->name('voluntariado.send');

    ////////////////////////////////////////////////////////////
    use App\Http\Controllers\DonacionPublicaController;

    Route::post('/donacion/enviar', [DonacionPublicaController::class, 'store'])->name('donaciones.public.store');

    
    /**
     * Route : get     |Consultar
     * Route : post    |Guardar
     * Route : delete  |Eliminar
     * Route : put     |Actualizar            
     */

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('blog', function () {
        return view('blog');
        $post = [
            ['id' =>1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' =>2, 'title' => 'Laravel', 'slug' => 'laravel']
        ];
    })->name('blog');

    Route::get('eventos', function () {
    return view('eventos');
    })->name('eventos');

    Route::get('calendario', function () {
    return view('calendario');
    })->name('calendario');

    Route::get('donaciones', function () {
        return view('donaciones');
    })->name('donaciones');

    Route::get('voluntarios', function () {
        return view('voluntarios');
    })->name('voluntarios');

    


    //  Route::get('prestamo', function () {
    //     return view('prestamo');
    //  })->name('prestamo');

    Route::get('ubicaciones', function () {
        return view('ubicaciones');
    })->name('ubicaciones');

    //  Route::get('librosp', function () {
    //     return view('librosp');
    // })->name('librosp');

    // Route::get('prestamosl', function () {
    //     return view('prestamosl');
    // })->name('prestamosl');

    // Route::get('donadores', function () {
    //     return view('donadores');
    // })->name('donadores');

    Route::get('comoserparte', function () {
        return view('comoserparte');
    })->name('comoserparte');

    Route::get('audiolibros', function () {
        return view('audiolibros');
    })->name('audiolibros');

    // Route::get('conexion', function () {
    //     return view('conexion');
    // })->name('conexion');

    /////////////////////////////////////////////////////////////////////
    Route::get('blog/{slug}', function ($slug) {
        //consulta a base de datos
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');

    Route::get('eventos/{slug}', function ($slug) {
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');

    Route::get('calendario/{slug}', function ($slug) {
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');

    Route::get('donaciones/{slug}', function ($slug) {
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');

    Route::get('voluntarios/{slug}', function ($slug) {
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');

    Route::get('prestamo/{slug}', function ($slug) {
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');

    Route::get('ubicaciones/{slug}', function ($slug) {
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');

    Route::get('librosp/{slug}', function ($slug) {
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');

    // Route::get('prestamosl/{slug}', function ($slug) {
    //     $post = $slug;
    //     return view('post', ['post' => $post]);
    // })->name('post');

    Route::get('donadores/{slug}', function ($slug) {
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');

    Route::get('comoserparte/{slug}', function ($slug) {
        $post = $slug;
        return view('post', ['post' => $post]);
    })->name('post');


    Route::post('Registrodonaciones', function(){
    return view('Registrodonaciones');
    })->name('Registrodonaciones');



    Route::post('conexion', function(){
        return view('conexion');
    })->name('conexion');

    /**Route::get('blog/{slug}', function ($slug) {
        //consulta a base de datos
        return $slug;
    });*/

    /**Route::get('buscar', function (Request $request) {
        
        return $request->all();
    });*/


    ///////////////////////////////////////////////////////////////////////////////////////////////////

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');

    // Route::get('/donadores', function () {
    //     return view('donadores');
    // })->middleware(['auth', 'verified'])->name('donadores');


    // Route::get('/donadores/{id}', [DonadoresController::class, 'show']);

    ////////////////////////////////////////////////////////////////////////

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/librosp', [LibroController::class, 'index'])->name('librosp');

    Route::get('/prestamosl', [PrestamoController::class, 'index'])->name('prestamosl');

    Route::get('/donadores', [DonacionController::class, 'index'])->name('donadores');

    Route::resource('voluntariado', VoluntariadoController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

    require __DIR__.'/auth.php';

