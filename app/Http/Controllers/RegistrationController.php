<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationController extends Controller
{
    //Display register page
    public function show(){
        return view('ToDoListRegistration');
    }
    
}
