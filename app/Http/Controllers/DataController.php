<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DataController extends Controller
{
    public function HeroesData()
    {
        try {
            // App::setLocale('es');
            $file = json_decode(file_get_contents(public_path() . '/data.json'), true);
            $dc_heroes = $file['heroes']['dc'];
            $marvel_heroes = $file['heroes']['marvel'];
            // return count($dc_heroes);
            return view('welcome')->with(['dc_heroes' =>  $dc_heroes, 'marvel_heroes' => $marvel_heroes]);
        } catch (\Throwable $th) {
            //throw $th;
            return view('welcome')->with(['dc_heroes' =>  [], 'marvel_heroes' => []]);
        }
    }
}
