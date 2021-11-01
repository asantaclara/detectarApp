<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'birthday' => 'required|date_format:d/m/Y|before:today',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ],[
            'name.max' => 'El nombre debe tener a lo sumo 255 caracteres',
            'name.required' => 'Debe ingresar un nombre',
            'email.required' => 'Debe ingresar un email',
            'email.unique' => 'Ya se creó una cuenta con ese email',
            'birthday.before' => 'La fecha debe ser previa a hoy.'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'birthday' => Carbon::createFromFormat('d/m/Y',$request->birthday),
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
