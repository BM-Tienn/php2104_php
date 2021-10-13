@extends('layouts.form')
@section('page','Register Form')
@section('form')
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Register an account</div>
    <div class="card-body">
      <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label>First name</label>
              <input class="form-control" type="text" name="first_name" placeholder="First name"
                     required
                     oninvalid="this.setCustomValidity('Please enter first name')"
                     oninput="this.setCustomValidity('')"
              >
            </div>
            <div class="col-md-6">
              <label>Last name</label>
              <input class="form-control" type="text" name="last_name" placeholder="Last name" required
                     oninvalid="this.setCustomValidity('Please enter last name')"
                     oninput="this.setCustomValidity('')">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input class="form-control"  type="text" name="email" placeholder="Enter email" required
                 oninvalid="this.setCustomValidity('Please enter email')"
                 oninput="this.setCustomValidity('')"
          >
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label>Password</label>
              <input class="form-control" type="password" name="password" placeholder="Password" required
                     oninvalid="this.setCustomValidity('Please enter password')"
                     oninput="this.setCustomValidity('')">
            </div>
            <div class="col-md-6">
              <label>Confirm password</label>
              <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password" required
                     oninvalid="this.setCustomValidity('Please enter confirm password')"
                     oninput="this.setCustomValidity('')">
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Register</button>
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="{{route('login')}}">Login Page</a>
        <a class="d-block small" href="">Forgot Password?</a>
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
