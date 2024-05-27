<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>contactview</title>
</head>
<body>
    {{-- <pre>{{print_r($contacts)}}</pre>; --}}
    <div class="container">
        <h2 class="text-center m-5">contact information</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">country</th>
                <th scope="col">state</th>
                <th scope="col">city</th>
                <th scope="col">address</th>
                <th scope="col">gender</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Delete Row</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
              <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->country}}</td>
                <td>{{$contact->state}}</td>
                {{-- <td>{{$contact->city}}</td> --}}
                <td>
                    @if ($contact->city == 'karachi')
                        <span class="badge text-bg-danger"> Islamabad</span>
                    @else
                        <span class="badge text-bg-danger">Peshawar</span>
                    @endif
                </td>
                <td>{{$contact->address}}</td>
                <td>{{$contact->gender}}</td>
                <td>{{$contact->created_at}}</td>
                <td>{{$contact->updated_at}}</td>
                <td>
                    <a href="{{url('/contact/delete')}}/{{$contact->id}}"><span class="badge text-bg-danger">Delete</span></a>
                    
                </td>
            </tr>
            @endforeach               
              
              
            </tbody>
          </table>
    </div>

    
</body>
</html>