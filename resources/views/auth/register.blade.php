@extends('layouts.show')
@section('style')
    <style>
        span{
            color: red;
        }
    </style>
@endsection
@section('content')
    <section class="">
        <div class="mask d-flex align-items-center  gradient-custom-3">
            <div class="container ">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-outline col-6 mb-4">
                                            <input type="text" name="firstname" id="form3Example1cg" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1cg">first Name</label>
                                            @error('firstname')
                                            <span>{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-outline col-6 mb-4">
                                            <input type="text" name="lastname" id="form4Example1cg" class="form-control form-control-lg" />
                                            <label class="form-label" for="form4Example1cg">last Name</label>
                                            @error('lastname')
                                            <span>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-outline col-8 mb-4">
                                            <input type="email" name="email" id="form5Example3cg" class="form-control form-control-lg" />
                                            <label class="form-label" for="form5Example3cg">Your Email</label>
                                            @error('email')
                                            <span>{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-outline col-4 mb-4">
                                            <input type="text"  name="phone" id="form8Example4cdg" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example4cdg">phone</label>
                                            @error('phone')
                                            <span>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="address" id="form6Example3cg" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">FULL Address</label>
                                        @error('address')
                                        <span>{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="form9Example4cg" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        @error('password')

                                        <span>{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password_confirmation" id="form10Example4cdg" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">Confirm your password</label>
                                        @error('confirmPassword')
                                        <span>{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <input type="submit"
                                               class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Register"></input>
                                    </div>
                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{route('login')}}" class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
