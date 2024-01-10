@extends('layouts.layout')
@section('title') <title> E-school | Student Portal</title> @endsection
@section('content')
    <div class="container-xxl  border-bottom py-3">
        <div class="row align-items-center justify-conten-between">
            <div class="col-md-3">
                <div class="row d-flex ps-2"> 
                    <ul class="navbar-nav d-flex align-items-center flex-row gap-3" >
                        <li class="nav-item">
                            <a href="#" class="nav-link">Check Result</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Get IDCard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 student-info">
                <h5>{{$student->last_name . " " . $student->other_names . " " . $student->matric_number}}</h5>
            </div>
            <div class="col-md-4 bread-crums lead">
                <h6 ><span class="text-muted" >You are here: {{ 'Home'}} > </span>{{'Undergraduate'}} </h6>
            </div>
        </div>
    </div>
    <div class="container-xxl my-2">
        <div class="row">
            <div class="col-md-6 ">
                <div class="row">
                    <div class="col">
                         <table class="table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>Matric Number </th>
                                    <th>{{ $student->matric_number}}</th>
                                </tr>
                                {{-- <tr>
                                    <th>Programme </th>
                                    <th>{{ $student->matric_number}}</th>
                                </tr> --}}
                                <tr>
                                    <th>Faculty</th>
                                    <th>{{ $student->faculty}}</th>
                                </tr>
                                <tr>
                                    <th>Department </th>
                                    <th>{{ $student->department}}</th>
                                </tr>
                                <tr>
                                    <th>Email </th>
                                    <th>{{ $student->email}}</th>
                                </tr>
                                <tr>
                                    <th>Phone </th>
                                    <th>{{ $student->phone}}</th>
                                </tr>
                                <tr>
                                    <th>Entry Year </th>
                                    <th>{{ $student->year_of_admission}}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                {{-- TODO email-put --}}
                <div class="row">
                    <form 
                        action="{{ Route('update.email', $student->id)}}"
                        {{-- action="" --}}
                        method="POST"
                        class="col "
                        >
                        @csrf
                        @method('PATCH')
                        @if(session()->has('mssg'))
                        <div class="row">
                            <span class="text-center">
                                {{ session('mssg')}}
                            </span>
                        </div>

                        @endif
                        <div class="row gap-3">
                            <div class="row col-md-12 d-md-flex justify-content-between align-items-center">
                                <div class="col-md-6 ">
                                    <label >Email</label>
                                    <input type="text" value="{{ old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            <span > {{$message}} </span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 pt-2">
                                    {{-- <input class="rounded-none btn btn-primary" value="S">Update Email Adress</input> --}}
                                    <input type="submit" value="Update Email Address" class="btn btn-primary">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <form 
                        action="{{ Route('update.phone', $student->id)}}"
                        {{-- action="" --}}
                        method="POST"
                        >
                        @csrf
                        @method('PATCH')
                        <div class="row gap-3">
                            <div class="col-md-6">
                                <label for="">Phone</label>
                                <input type="text" name="phone" value="{{ old('phone')}}" class="form-control @error('phone') is-invalid @enderror">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        <span > {{$message}} </span>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary">Update Phone Number</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            {{-- RIGHT ROW --}}
            <div class="col-md-6 py-3">
                <div class="row">
                    <div class="col">
                        <a href="{{ Route('edit.img', $student->id)}}" class="btn btn-primary btn-sm">Edit Image</a>
                    </div>
                    <div class="col">
                        <img src="{{ $student->passport ? asset('storage/' . $student->passport ) : asset('img/user.jpg')}}"  width="100" alt="{{ $student->last_name}}">
                    </div>
                </div>


                {{-- TODO STUDENT RECORD TABLE --}}
            </div>
        </div>


    </div>
    
@endsection