<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\languages;
use App\Repositories\logo;
use App\Repositories\cars;

use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //LINK RAIZ METODO dashbord retorna o welcome
    public function dashbord()
    {
        $repositoryCars = new Cars();
        $allCars = $repositoryCars->getCars();

        return view('welcome', ['cars' =>  $allCars]);
    }
}
