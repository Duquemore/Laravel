<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'Joel',
            'Ellie',
            'Tess',
            'Sampeseste',
            'mi pez',
            'neita',
            'pana'
        ];
        $neas = [
            'ana',
            'mariana',
            'nina',
            'guadalupe',
            'linda',
        ];
        return view('users', compact('users', 'neas'));
        // otras formas
        // return view('users')->with('users', $users)
        //                     ->with('neas', $neas);
        // return view('users')->with(['users' => $users, 'neas' => $neas]);
        // return view('users', ['users' => $users, 'neas' => $neas]);
    }
     
    public function detail($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }

    public function crear()
    {
       return "Crear Nuevo Usuario";
    }
}
 