<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisteredUsersController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validated = request()->validate([
            'first_name' => ['required', 'min:2'],
            'last_name'  => ['required', 'min:2'],
            'email'      => ['required', 'email'],
            'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols(), 'confirmed']
        ]);
        $user = User::create($validated);
        auth()->login($user);  // log the user in
        return redirect('/jobs');
    }
}
