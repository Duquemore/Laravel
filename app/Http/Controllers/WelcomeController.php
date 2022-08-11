<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello($name, $lastname = null)
    { 
        if($lastname){
            return "Hola {$name} {$lastname}";    
        } else {
            return "Hola {$name}, no tienes apodo";
        }
    }
}
