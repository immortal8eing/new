<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {

       $validatedData = $request->validate([
           'name' => ['required', 'max:255'],
           'email' => ['required', 'email:dns', 'unique:users'],
           'password' => ['required', 'min:8', 'max:255'],

       ]);

       $validatedData ['password'] = Hash::make($validatedData ['password']);

       User::create($validatedData);

       $request->session()->flash('success', 'Registrasion successfull!');

       return redirect('/login');
    }   
}
