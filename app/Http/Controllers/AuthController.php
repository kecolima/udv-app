<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PainelController;

class AuthController extends Controller
{
    public function logar(){

        $painel = new PainelController();
        $painel =  $painel->ver();

        return ($painel);
    }
}
