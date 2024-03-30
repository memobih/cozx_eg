@extends('layouts.show')
@section('style')
    <style>
        span {
            color: red;
        }
    </style>
@endsection
@section('content')
    <section class="">
        <div class="mask d-flex align-items-center  gradient-custom-3">
            <div class="container ">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-12">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-4">Your Profile</h2>
                                <form method="POST" action="{{ route('user.update',['user'=>auth()->user()->id]) }}">
                                    @csrf
                                    @method('put')
                                    <div class="row justify-content-center">
                                        <div class="form-outline col-5 mb-4">
                                            <input type="text" name="firstname" value="{{$user->firstname}}"
                                                   id="form3Example1cg" class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example1cg">first Name</label>
                                            @error('firstname')
                                            <span>{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-outline col-5 mb-4">
                                            <input type="text" name="lastname" value="{{$user->lastname}}"
                                                   id="form4Example1cg" class="form-control form-control-lg"/>
                                            <label class="form-label" for="form4Example1cg">last Name</label>
                                            @error('lastname')
                                            <span>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="form-outline col-10 mb-4">
                                            <input type="email" value="{{$user->email}}" name="email"
                                                   id="form5Example3cg" class="form-control form-control-lg"/>
                                            <label class="form-label" for="form5Example3cg">Your Email</label>
                                            @error('email')
                                            <span>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="form-outline col-10 mb-4">
                                            <input type="text" value="{{$user->phone}}" name="phone"
                                                   id="form8Example4cdg" class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example4cdg">phone</label>
                                            @error('phone')
                                            <span>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="form-outline col-10 mb-4">
                                            <input type="text" value="{{$user->address}}" name="address"
                                                   id="form6Example3cg" class="form-control form-control-lg"/>
                                            <label class="form-label" for="form3Example3cg">FULL Address</label>
                                            @error('address')
                                            <span>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="d-flex justify-content-center col-10">
                                            <input type="submit"
                                                   class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                                                   value="save">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                            <a  href="{{ route('password.request') }}">change password</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
