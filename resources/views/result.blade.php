<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div id="app" v-bind:shows="{{$results}}">
    <example-component v-bind:results="{{$results}}" ></example-component>
    <p v-bind:show="{{$results}}"></p>

   @{{ nader }}
    <button >Greet</button>
</div>


<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
