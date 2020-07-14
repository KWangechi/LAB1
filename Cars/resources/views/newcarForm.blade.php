<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Car Application</title>
</head>
<body>

@if (Session::has('form_submit'))
session('form_submit')
@endif

@if($count($errors))

@foreach($errors->all() as $error))
<li>{{$error}}</li>


@endforeach
@endif

<form action="/newcar" method="post" enctype= "multipart/form-data">

{{ csrf_field() }}

    Make: <input type="text" name="make" id="make" value="{{old('make')}}">
    <br>

    Model: <input type="text" name="model" id="model" value="{{old('model')}}">
    <br>

    Production date: <input type="date" name="produced_at" id="produced_at" value="{{old('produced_at')}}">

<br>
<input type="file" value="Please choose a picture" id="image" name="image" value="{{old('image')}}">
<br>

    <input type="submit" value="SAVE" name="save" id="save">

</form>

    
    
</body>
</html>