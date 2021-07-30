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
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        $user = new User();

        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;

        $user->save();

        return redirect('/users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
