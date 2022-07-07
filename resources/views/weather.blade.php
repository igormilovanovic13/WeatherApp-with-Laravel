<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vremenska prognoza</h1>
    <div>
        <img src="http://openweathermap.org/img/wn/{{$current_weather['weather'][0]['icon']}}@2x.png" alt="">
        <p>
            Grad: {{ $current_weather['name'] }}
        </p>
        <p>
            Trenutno vreme: {{ $current_weather['weather'][0]['description'] }}
        </p>
        <p>
            Temperatura: {{ round($current_weather['main']['temp']) }}&#8451;
        </p>
        <p>
            Stvarni osecaj: {{ round($current_weather['main']['feels_like']) }}&#8451;
        </p>
        <p>
            Min. temp: {{ round($current_weather['main']['temp_min']) }}&#8451;
        </p>
        <p>
            Max. temp: {{ round($current_weather['main']['temp_max']) }}&#8451;
        </p>
    </div>
    <a href="/">Vrati se nazad.</a>
</body>
</html>
