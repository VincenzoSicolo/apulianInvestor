<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    
    public function index(){
        //dd(Auth::check());
        return inertia ('Index/Index',
    [
        'message' => 'Hello from stuca'
    ]);
    }
    public function show(){
        return inertia ('Index/Show');

    }
}
