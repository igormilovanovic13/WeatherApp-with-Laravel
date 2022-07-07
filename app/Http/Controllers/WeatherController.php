<?php

namespace App\Http\Controllers;

use App\Services\Weather;

class WeatherController extends Controller
{
    public function __invoke(Weather $weather)
    {
        request()->validate(['city' => 'required']);

        $response = $weather->show(request('city'));

        if($response['cod'] == "404") {
            return redirect('/');
        }

        return view('/weather', [
            'current_weather' => $response
        ]);
    }
}
