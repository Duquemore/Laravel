<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(request()->has('empty')){
            $users = [];
        } else {
            $users = [
                'Joel',
                'Ellie',
                'Tess',
                'Sampeseste',
                'mi pez',
                'neita',
                'pana'
            ];
        }

        $neas = [
            'ana',
            'mariana',
            'nina',
            'guadalupe',
            'linda',
        ];
        
        return view('users.index', compact('users', 'neas'));
        // otras formas
        // return view('users')->with('users', $users)
        //                     ->with('neas', $neas);
        // return view('users')->with(['users' => $users, 'neas' => $neas]);
        // return view('users', ['users' => $users, 'neas' => $neas]);
    }
     
    public function detail($id)
    {
        return view('users.show',compact('id'));
    }

    public function crear()
    {
       return "Crear Nuevo Usuario";
    }
}
 