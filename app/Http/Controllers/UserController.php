<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }


    public function index()
    {
        return view('users.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required', 
        ]);

        $user = new User();

        $user->first_name = $request->firstName;
        $user->last_Name = $request->lastName;
        $user->email = $request->email;

        $user->save();

        return redirect('/users');
    }
}
