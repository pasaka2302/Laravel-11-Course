<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;
use function Laravel\Prompts\password;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class UsersSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // dd(request()->all());
        // validate the request
        $validated = request()->validate([
            'email'    => ['required', 'email'],
            // 'password' => ['required', Password::min(8)->letters()->numbers()->symbols()]
            'password' => ['required']
        ]);
          // attempt to authenticate the user
        if(!Auth::attempt($validated)){
            throw ValidationException::withMessages([
                'email' =>'Sorry, the provided credetial does not match our records!'
            ]);
        }
            // if not, redirect back
            // if so, sign them in
          request()->session()->regenerate();
        // redirect to the home page
        return redirect('/jobs');
    }

    public function destroy()
    {
        // dd('logout');
        auth()->logout();
        return redirect('/login');  // log the user out and redirect to login page
    }
}
