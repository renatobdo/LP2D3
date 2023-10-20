<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<div class="container">

    <body>
        <h1>{{$title}}</h1>
        {{$slot}}
    </body>
</div>

</html>