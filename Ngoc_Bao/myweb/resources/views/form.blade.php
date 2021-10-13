<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
<h3 class="text-center">Form GET</h3>
<form action="/result_get" method="GET">
    <div class="container">
            <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Enter name...">
        </div>
        <div class="mb-3 ">
            <label class="form-label">Age</label>
            <input type="age" name="age" class="form-control"  placeholder="Enter age...">
        </div>
        <div class="mb-3 ">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control"  placeholder="Enter address...">
        </div>
        <button type="submit" class="btn btn-primary">GET</button>
    </div>   
</form>
<h3 class="text-center">Form POST</h3>
<form action="/result_post" method="POST">
@csrf
    <div class="container">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Enter name...">
        </div>
        <div class="mb-3 ">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"  placeholder="Enter email...">
        </div>
        <div class="mb-3 ">
            <label class="form-label">Password</label>
            <input type="password" name="pass" class="form-control"  placeholder="Enter password...">
        </div>
        <button type="submit" class="btn btn-primary">POST</button>
    </div>   
</form>
</body>
</html>