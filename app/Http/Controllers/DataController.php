<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DataController extends Controller
{
    public function HeroesData($locale = 'en')
    {
        // return $locale;
        try {
            // App::setLocale($locale);
            $file = json_decode(file_get_contents(public_path() . '/data.json'), true);
            $dc_heroes = $file['heroes']['dc'];
            $marvel_heroes = $file['heroes']['marvel'];
            $cities = $file['cities'];
            // return count($dc_heroes);
            return view('welcome')->with(['dc_heroes' =>  $dc_heroes, 
                                        'marvel_heroes' => $marvel_heroes,
                                        'cities' => $cities]);
        } catch (\Throwable $th) {
            //throw $th;
            return view('welcome')->with(['dc_heroes' =>  [], 
                                    'marvel_heroes' => [],
                                    'cities' => []]);
        }
    }
}
