<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller{
    public function index(){
        // Using Laravel query builder
        // $users = DB::table('users')->get();

        //Using Eloquent
        $users = User::all();
        return view('users.index', compact('users'));
        
        // another ways
        // return view('users')->with('users', $users)
        //                     ->with('neas', $neas);
        // return view('users')->with(['users' => $users, 'neas' => $neas]);
        // return view('users', ['users' => $users, 'neas' => $neas]);
    }
     
    public function detail($id){
        $users = User::find($id);
        $name = $users->name;
        $email = $users->email;
        $profession = $users->profession;
        $is_admin = $users->is_admin;
        return view('users.show', compact('name', 'email', 'profession', 'is_admin'));
    }

    public function new(){
       return "Crear Nuevo Usuario";
    }
}
 