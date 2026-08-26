<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\Libro;
use App\Models\Donacion;
use App\Models\Prestamo;
use App\Models\Voluntariado;

class ProfileController extends Controller
{
    public function edit(Request $request): View
    {
        $totalLibros = Libro::count();

        $prestamosActivos = Prestamo::where(function ($query) {
            $query->whereNull('fecha_devolucion')
                  ->orWhere('fecha_devolucion', '>', now());
        })->count();

        $totalDonaciones = Donacion::count();

        $totalVoluntariado = Voluntariado::count();

        return view('profile.edit', [
            'user' => $request->user(),
            'totalLibros' => $totalLibros,
            'prestamosActivos' => $prestamosActivos,
            'totalDonaciones' => $totalDonaciones,
            'totalVoluntariado' => $totalVoluntariado,
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')
            ->with('success', 'Perfil actualizado correctamente');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')
            ->with('success', 'Cuenta eliminada correctamente');
    }
}