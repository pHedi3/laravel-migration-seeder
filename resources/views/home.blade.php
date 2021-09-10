<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($allTrip['allTrip'] as $trip)  
    <div>
        {{$trip->title}}
        {{$trip->place}}
        {{$trip->price}}
        {{$trip->description}}
        {{$trip->genre}}
    </div>
    <br>
    @endforeach
    <h1>filtrati per genere arte</h1>
    @foreach ($artTrip['artTrip'] as $trip)  
    <div>
        {{$trip->title}}
        {{$trip->place}}
        {{$trip->price}}
        {{$trip->description}}
        {{$trip->genre}}
    </div>
    <br>
    @endforeach
</body>
</html>