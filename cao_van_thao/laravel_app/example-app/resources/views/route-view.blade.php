<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div>
        <h2> route_get </h2>
        <div class="container">
            <div class="row">
                <form method="GET" action="show-get">
                    <div class="mb-3">
                        <label for="#">name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="#">age</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="age" required="">
                    </div>
                    <div class="mb-3">
                        <label for="#">phone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="phone" required="">
                    </div>
                    <div class="mb-3">
                        <label for="#">address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="address" required="">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <div>
        <h2> route_post </h2>
        <div class="container">
            <div class="row">
                <form method="POST" action="show-post">
                    @csrf
                    <div class="mb-3">
                        <label for="#">name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="#">email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" required="">
                    </div>
                    <div class="mb-3">
                        <label for="#">phone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="phone" required="">
                    </div>
                    <div class="mb-3">
                        <label for="#">address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="address" required="">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>