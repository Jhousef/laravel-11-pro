<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        //regras de negocio
        //variaveis e conteudos -> view
        return view('users.index', [
            'greeting' => 'Hello World',
            'users' => $users
        ]);
        // return [
        //     'id' => 1,
        //     'name' => 'Jon Snow'
        // ];
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
}
