<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register Form') }}
        </h2>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </x-slot>

    <div class="container">
    <form action="/info" style="margin-top: 20px" method="GET">
        <div class="mb-3">
            <label for="" class="form-label">Name: </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Age: </label>
            <input type="number" class="form-control" name="age">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Address: </label>
            <input type="text" class="form-control" name="address">
        </div>
        <button type="submit" name="registerget" class="btn btn-primary" style="margin-top: 10px">Submit Get</button>
    </form>
    <form action="/info" style="margin-top: 20px" method="POST">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Name: </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Age: </label>
            <input type="number" class="form-control" name="age">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Address: </label>
            <input type="text" class="form-control" name="address">
        </div>
        <button type="submit" name="registerpost" class="btn btn-primary" style="margin-top: 10px">Submit Post</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</x-app-layout>