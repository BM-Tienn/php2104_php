@extends('layouts.form')
@section('page','Login Form')
@section('form')
  <div class="card card-login mx-auto mt-5">
    <div class="card-header">Login</div>
    <div class="card-body">
      <form method="POST" action="{{route('account.login')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input class="form-control" type="text" name="email" placeholder="Enter email"
                 required
                 oninvalid="this.setCustomValidity('Please enter email')"
                 oninput="this.setCustomValidity('')"
          >
        </div>
        <div class="form-group">
          <label>Password</label>
          <input class="form-control" type="password" name="password" placeholder="Enter password"
                 required
                 oninvalid="this.setCustomValidity('Please password')"
                 oninput="this.setCustomValidity('')"
          >
        </div>
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="token"> Remember Password</label>
          </div>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Login</button>
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="{{route('account.register')}}">Register an Account</a>
        <a class="d-block small" href="">Forgot Password?</a>
      </div>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger mt-4">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>
@endsection
