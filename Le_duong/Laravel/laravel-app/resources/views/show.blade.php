<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="font-sans text-gray-900 antialiased">
        <div class="container">
            <h3 class="mt-4">Management accounts</h3>
            <div class="row mt-4">
                <div class="col-lg-6">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Token</th>
                    <th scope="col">Username</th>
                    <th scope="col">Address</th>
                    <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($values as $key => $value)
                        <td>{{$value}}</td>
                        @endforeach
                    </tr>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>