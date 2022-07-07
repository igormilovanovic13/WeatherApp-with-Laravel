<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Openweather implements Weather
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public  function show($city)
    {
        $key = $this->config['key'];
        return Http::get("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$key}&units=metric&lang=sr")->json();
    }
}
