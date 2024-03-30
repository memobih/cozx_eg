@extends('layouts.show')

@section('content')
    <div class="row">
    <div class="col-3"></div>
    <div class="m-4 col-6 justify-content-center" >
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="form-outline mb-4">
            <input type="email" name="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>
        <div class="form-outline mb-4">
            <input type="password" name="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>

            <div class="col">
                <a href="{{ route('password.request') }}">Forgot password?</a>
            </div>
        </div>
        <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign in">
        <div class="text-center">
            <p>Not a member? <a href="{{route('register')}}">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button>
        </div>
    </form>
    </div>
    <div class="col-3"></div>
</div>
@endsection
