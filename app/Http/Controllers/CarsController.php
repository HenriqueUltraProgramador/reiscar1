<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\languages;
use App\Repositories\logo;
use App\Repositories\cars;

class CarsController extends Controller
{
    /**
     * Show <ll cars
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $repositoryCars = new Cars();
        $allCars = $repositoryCars->getCars();

        return view('cars.index', ['cars' =>  $allCars]);
    }



    public function show($id)
    {
        $repositoryCars = new Cars();
        $specificCar = $repositoryCars->getOneCar($id);
        return view('cars.show', ['car' =>  head($specificCar)]);
    }
}
