<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>
</head>
<body>
    @include('anchortag');
    <div class="container">
        <p>this is about us page</p>
        <p>{{$name}}</p>
        <p>{{$age}}</p>
    </div>

    <div class="component">
    <x-input type = 'text' name = 'name'/>
    {{-- <x-input type = 'text' name= 'email'/>
    <x-input type = 'email' name = 'email'/> --}}
    </div>
    
</body>
</html>