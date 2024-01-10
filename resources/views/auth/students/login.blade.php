@extends('layouts.layout')
@section('title') <title>School | Student Login</title> @endsection
@section('content')
    <section class="login-page">
        <div class="container-sm mt-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 col-lg-5 shadow bg-white rounded py-3">
                    <div class="login-title pt-2 pb-4"> 
                        <h3 class="text-center">Students Login Panel</h3>
                    </div>
                    <form action="{{Route('students.login')}}" method="POST">

                        @csrf
                        @if(session()->has('mssg'))
                            <div class="text-center">
                                {{ session('mssg')}}
                            </div>
                        @endif
                            <div class="row text-center color-danger">

                            </div>
                        <div class="d-flex flex-column gap-3">
                            <div class="row px-3">
                                <input type="text" placeholder="Matric number" class="form-control @error('matric_number') is-invalid @enderror}" name="matric_number">
                                @error('matric_nmber')
                                    <div class="invalid-feedback">
                                        <span> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>
                            <div class="row px-3">
                                <input type="password" name="password" class="form-control @error("password") is-invalid @enderror" placeholder="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        <span> {{ $message }} </span>
                                    </div>
                                @enderror
                            </div>
                            {{-- <input type="submit" value="Login" class="btn bg-primary color-white"> --}}
                            <button type="submit" class="btn btn-primary ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection