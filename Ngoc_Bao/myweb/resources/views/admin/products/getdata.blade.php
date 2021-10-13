@section('username')
<a href="#" class="d-block">{{$user->name}}</a>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all data</title>
</head>
<body>



    @foreach ($products as $product)
    {{$product}}
        <br/>
        <br/>
    @endforeach
</body>
</html>