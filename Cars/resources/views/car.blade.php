<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Car Application</title>
</head>
<body>
<h1>A list of all the cars produced</h1>



@foreach($cars as $car)
<li> {{$car->id }} {{ $car->make }} {{ $car->model }} {{ $car->produced_on }}</li>

@endforeach

    
    
</body>
</html>