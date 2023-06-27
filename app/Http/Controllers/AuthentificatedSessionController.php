<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;

class AuthentificatedSessionController extends Controller
{
    public function create()
    {
        $vue = 'auth.login';
        Fortify::loginView($vue);
    }
}
