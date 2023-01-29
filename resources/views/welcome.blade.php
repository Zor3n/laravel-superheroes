<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bulma/css/bulma.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <x-hero-section-component></x-hero-section-component>
    <x-heroes-grid :dc="$dc_heroes" :marvel="$marvel_heroes"></x-heroes-grid>
    <x-cities-grid :cit="$cities"></x-cities-grid>
    <x-about-us></x-about-us>
    <x-contact></x-contact>
    <x-footer></x-footer>

    <script src="js/bulma.js"></script>
</body>

</html>
