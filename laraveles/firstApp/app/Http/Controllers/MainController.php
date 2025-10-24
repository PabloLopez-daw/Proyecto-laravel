<?php

// package app.Http.Controllers;
namespace App\Http\Controllers;

// import illuminate.http.request;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller {
    // método púpblico de la clase MainController

    public function about(): View {
        return view('first.about', ['newContent' => 'I dont know what to put here', 'nomellega' => 'si te llega']);
    }

     
    public function index(): View {
        return view('index');
    }

    function firstform(): View {
        return view('form.firstform');
    }     

   
/*  function firstMethod() {
        return view('app.template');
    }

    public function secondMethod() {
       return view('second');
    }

    function thirdMethod(): view{
        return view('third');
    }
*/
    function template(): View{
        return view('app.bootstrap.template');
    }
    //php permite indicar el tipo de resultado devuelto
}
    

