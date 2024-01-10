@extends('layouts.layout')
@section('title')
    <title>E-school | Portal </title>
@endsection
@section('content')
    <section class="container-fluid my-5 bg-sucess">
        <div class="d-flex flex-column align-items-center">
            <h2 class="heading-2 text-center">Welcome to High life institutue</h2>
            <p class="description">We make learning easy and understandable with our amazing curriculum ..</p>
            <p class="description">our sole resposibility and aim is you unlock full potential.</p>
        </div>
    </section>
    {{-- Banner  --}}
    <section class="text-center">

    </section>
    <section class="container-xxl">
        <div class="grid text-center">
            <div class="row d-flex aling-items-center justify-content-center gap-4 p-2">
                <div class="card  text-center col-md-5 col-lg-3 px-0">
                    <h3 class="card-header bg-primary">For Prospective students</h3>
                    <div class="card-body  ">
                        <p class="card-text">
                            <ul class="ps-0">
                                <li><a href="/" class="nav-link">HND Application</a></li>
                                <li><a href="/" class="nav-link py-3">Post Utme Application</a></li>
                                <li><a href="/" class="nav-link">ND Port Application</a></li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="card text-center col-md-5 col-lg-3 px-0">
                    <h3 class="card-header bg-primary p">For Regular students</h3>
                    <div class="card-body">
                        <p class="card-text">
                            <ul class=" ps-0 gap-2">
                                <li><a href="/" class="nav-link">Login</a></li>
                                <li><a href="/" class="nav-link py-3">Verify Admission Status</a></li>
                                <li><a href="/" class="nav-link pb-3">Forgot-Password</a></li>
                                <li><a href="/" class="nav-link pb-3">E-Learning</a></li>
                                <li><a href="/" class="nav-link">Hostel Registration</a></li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="card col-md-5 col-lg-3 px-0">
                    <h3 class="card-header bg-primary ">For old students</h3>
                    <div class="card-body ">
                        <p class="card-text">
                            <ul class="ps-0">
                                <li><a href="/" class="nav-link">Do your Clearance</a></li>
                                <li><a href="/" class="nav-link py-3">Apply for staement of result</a></li>
                                <li><a href="/" class="nav-link pb-3">Aplly for transcript</a></li>
                                <li><a href="/" class="nav-link">Aplly for certificate</a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection