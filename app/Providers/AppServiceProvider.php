<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\Donacion;
use App\Models\Voluntariado;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
public function boot(): void
{
    View::composer('*', function ($view) {

        $prestamosActivos = Prestamo::where(function ($query) {
            $query->whereNull('fecha_devolucion')
                  ->orWhere('fecha_devolucion', '>', now());
        })->count();

        $view->with('totalLibros', Libro::count())
             ->with('prestamosActivos', $prestamosActivos)
             ->with('totalDonaciones', Donacion::count())
             ->with('totalVoluntariado', Voluntariado::count());
    });
}
}
