<?php

namespace App\Http\Controllers;
use App\Models\Peinado;
use Illuminate\Http\Request;
use Illuminate\View\View;
class MainController extends Controller
{
    function main(){
        $peinados = peinado::all();
        return view('main.main', ['peinados' => $peinados]);
    }

    function about(){
        return view('main.about');
    }
}























