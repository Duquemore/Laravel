<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Using Laravel query builder
        // $users = DB::table('users')->get();

        //Using Eloquent
        $users = User::all();
        return view('users.index', compact('users'));
        
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
 